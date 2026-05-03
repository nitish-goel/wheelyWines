<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;
use App\Models\User;
use App\Models\Service;
use App\Models\Appointment;

class BookingController extends Controller
{

    public function index()
    {
        $response=[];
        $response['services'] = DB::table('services')->where('status','=',0)->get();               
        return view('site.booking.index', $response);
    }  

    public function payment(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'phone' => 'required|digits:10',
            'car_company' => 'required|string',
            'car_name' => 'required|string',
            'car_model' => 'required|string',
            'service_id' => 'required|numeric',
            'service_name' => 'required|string',
            'amount' => 'required|numeric|min:1|max:500',
        ]);

        $orderId = 'order_' . time();
        $customerId = $request->name . '_' . time();

        $url = env('CASHFREE_ENV') === 'sandbox'
            ? "https://sandbox.cashfree.com/pg/orders"
            : "https://api.cashfree.com/pg/orders";

        $response = Http::withHeaders([
            'x-client-id' => env('CASHFREE_API_KEY'),
            'x-client-secret' => env('CASHFREE_API_SECRET'),
            'x-api-version' => '2022-01-01',
            'Content-Type' => 'application/json'
        ])->post($url, [
            "order_id" => $orderId,
            "order_amount" => $request->amount,
            "order_currency" => "INR",
            "customer_details" => [
                "customer_id" => $customerId,
                "customer_name" => $request->name,
                "customer_phone" => $request->phone
            ],
            "order_meta" => [
                "return_url" => route('paymentSuccess') . "?order_id={order_id}"
            ]
        ]);
        // print_r($response->json());
        $data = $response->json();

        if (!$response->successful()) {
            return back()->with('error', 'Payment initiation failed');
        }

        // Save appointment (PENDING)
        Appointment::create([
            'name' => $request->name,
            'phone' => $request->phone,
            'car_company' => $request->car_company,
            'car_name' => $request->car_name,
            'car_model' => $request->car_model,
            'service_id' => $request->service_id,
            'service_name' => $request->service_name,
            'amount' => $request->amount,
            'order_id' => $orderId,
            'payment_status' => 'pending'
        ]);

        // Redirect to payment page
        return redirect($data['payment_link']);
    }
    public function success(Request $request)
    {
        $orderId = $request->order_id;

        if (!$orderId) {
            return redirect('/appointment')->with('error', 'Missing order ID');
        }

        $url = (env('CASHFREE_ENV') === 'sandbox'
            ? "https://sandbox.cashfree.com/pg/orders/"
            : "https://api.cashfree.com/pg/orders/") . $orderId;

        $response = Http::withHeaders([
            'x-client-id' => env('CASHFREE_API_KEY'),
            'x-client-secret' => env('CASHFREE_API_SECRET'),
            'x-api-version' => '2022-01-01'
        ])->get($url);

    // ✅ Check API response
    if (!$response->successful()) {
        return redirect('/appointment')->with('error', 'Payment verification failed');
    }

    $data = $response->json();
    // dd($data);
    $payment = Appointment::where('order_id', $orderId)->first();

    // ✅ Check payment exists
    if (!$payment) {
        return redirect('/appointment')->with('error', 'Order not found');
    }

    // ✅ Only update if payment is PAID and not already processed
    if ($data['order_status'] === 'PAID' && $payment->payment_status != 'PAID') {

        $payment->update([
            'payment_status' => $data['order_status'],
            'payment_id' => $data['cf_order_id'] ?? null,
            'payment_method' => json_encode($data['payments'] ?? [])
        ]);

        // ✅ Now update user (AFTER SUCCESS)
        $user = User::where('phone', $payment->phone)->first();

        if ($user) {
            if ($user->name == $payment->name) {
                $user->increment('total_service');
            }
        } else {
            User::create([
                'name' => $payment->name,
                'phone' => $payment->phone,
                'total_service' => 1,
            ]);
        }

        // ✅ Show receipt instead of redirect
        return view('site.booking.recipt', compact('payment'));
    }
    // ❌ FAILED / EXPIRED / OTHER CASES
    $payment->update([
        'payment_status' => $data['order_status'],
        'failure_reason' => $data['order_note'] ?? 'Payment failed or cancelled',
        'payment_method' => json_encode($data)
    ]);
    return redirect('/appointment')->with('error', 'Payment Failed!');
    }
}
