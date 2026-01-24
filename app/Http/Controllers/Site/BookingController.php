<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Models\Service;
use App\Models\Appointment;

class BookingController extends Controller
{

    public function index()
    {
        $services = DB::table('services')->where('status','=',0)->get();
        // echo '<pre>';
        // print_r($services);
        // echo ' </pre>';
        // die;
        return view('Site.booking.index', compact('services'));
    }
    // public function store(Request $request)
    // {
    //     $request->validate([
    //         'service_id' => 'required',
    //         'service_date' => 'required|date',
    //     ]);
    
    //     Appointment::create([
    //         'service_id' => $request->service_id,
    //         'user_id' => auth()->id(),
    //         'service_date' => $request->service_date,
    //     ]);
    
    //     return redirect()->route('home')->with('success', 'Appointment Booked!');
    // }

    public function createAppointment(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            // 'email' => 'required|email',
            'phone' => 'required|digits:10',
            'car_company' => 'required|string',
            'car_name' => 'required|string',
            'car_model' => 'required|string',
            'service_id' => 'required|numeric',
            'service_name' => 'required|string',
            'amount' => 'required|numeric|min:1|max:500',
        ]);

        // Generate unique order IDs
        $orderId = 'order_'.rand(1111111111, 9999999999);
        // Update user in table users
        $user = User::where('phone', $request->phone)->first();
        // dd($user);
        if(!empty($user)){
            $user->increment('services_completed');
        }else{
            User::create([
                'name' => $request->name,
                'phone' => $request->phone,
                'services_completed' => 1,
            ]);
        }
        // Store payment details in database
        $payment = Appointment::create([
            'name' => $request->name,
            // 'email' => $request->email,
            'phone' => $request->phone,
            'car_company' => $request->car_company,
            'car_name' => $request->car_name,
            'car_model' => $request->car_model,
            'service_id' => $request->service_id,
            'service_name' => $request->service_name,
            'amount' => $request->amount,
            'order_id' => $orderId,
            'status' => 0 // pending
        ]);
        if ($payment) {
            return redirect()->route('appointment')->with('success', 'Appointment Booked');
        } else {
            return redirect()->route('appointment')->with('error', 'Appointment Failed!');
        }
        
    }

    // public function payment(Request $request)
    // {
    //     $request->validate([
    //         'name' => 'required|string',
    //         // 'email' => 'required|email',
    //         'phone' => 'required|digits:10',
    //         'car_company' => 'required|string',
    //         'car_name' => 'required|string',
    //         'car_model' => 'required|string',
    //         'service_id' => 'required|numeric',
    //         'service_name' => 'required|string',
    //         'amount' => 'required|numeric|min:1|max:500',
    //     ]);

    //     // // Generate unique order IDs
    //     // $orderId = 'order_'.rand(1111111111, 9999999999);
    //     // $customerId = 'customer_'.rand(111111111, 999999999);

    //     // $url = env('CASHFREE_ENV') === 'sandbox'
    //     //     ? "https://sandbox.cashfree.com/pg/orders"
    //     //     : "https://api.cashfree.com/pg/orders";

    //     // $headers = [
    //     //     "Content-Type: application/json",
    //     //     "x-api-version: 2022-01-01",
    //     //     "x-client-id: ".env('CASHFREE_API_KEY'),
    //     //     "x-client-secret: ".env('CASHFREE_API_SECRET')
    //     // ];

    //     // $data = json_encode([
    //     //     'order_id' => $orderId,
    //     //     'order_amount' => $request->amount,
    //     //     "order_currency" => "INR",
    //     //     "customer_details" => [
    //     //         "customer_id" => $customerId,
    //     //         "customer_name" => $request->name,
    //     //         // "customer_email" => $request->email,
    //     //         "customer_phone" => $request->phone,
    //     //     ],
    //     //     "order_meta" => [
    //     //         "return_url" => route('paymentSuccess')
    //     //         // "return_url" => route('paymentSuccess').'?order_id={order_id}&order_token={order_token}'
    //     //     ],
    //     // ]);

    //     // $curl = curl_init($url);
    //     // curl_setopt($curl, CURLOPT_URL, $url);
    //     // curl_setopt($curl, CURLOPT_POST, true);
    //     // curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    //     // curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
    //     // curl_setopt($curl, CURLOPT_POSTFIELDS, $data);

    //     // $response = curl_exec($curl);
    //     // $err = curl_error($curl);
    //     // curl_close($curl);

    //     // if ($err) {
    //     //     return back()->with('error', 'Failed to create payment order: '.$err);
    //     // }

    //     // $responseData = json_decode($response);
    //     // echo '<pre>';
    //     // print_r($responseData);
    //     // echo '</pre>';
    //     // die;

    //     // // Store payment details in database
    //     // $payment = Appointment::create([
    //     //     'name' => $request->name,
    //     //     // 'email' => $request->email,
    //     //     'phone' => $request->phone,
    //     //     'car_company' => $request->car_company,
    //     //     'car_name' => $request->car_name,
    //     //     'car_model' => $request->car_model,
    //     //     'service_id' => $request->service_id,
    //     //     'service_name' => $request->service_name,
    //     //     'amount' => $request->amount,
    //     //     'order_id' => $orderId,
    //     //     'status' => 0 // pending
    //     // ]);

    //     // // Redirect to Cashfree payment page
    //     // // return redirect()->to($responseData->payment_link);
    //     // return response()->json($response->json());

            
    //     $orderId = 'ORD_' . time();

    //     $url = env('CASHFREE_ENV') === 'sandbox'
    //         ? 'https://sandbox.cashfree.com/pg/orders'
    //         : 'https://api.cashfree.com/pg/orders';

    //     $response = Http::withHeaders([
    //         'x-client-id' => env('CASHFREE_CLIENT_ID'),
    //         'x-client-secret' => env('CASHFREE_CLIENT_SECRET'),
    //         'x-api-version' => '2023-08-01',
    //         'Content-Type' => 'application/json'
    //     ])->post($url, [
    //         "order_id" => $orderId,
    //         "order_amount" => $request->amount,
    //         "order_currency" => "INR",
    //         "customer_details" => [
    //             "customer_id" => "CUST_" . rand(1000,9999),
    //             "customer_name" => $request->name,
    //             "customer_phone" => $request->phone
    //         ]
    //     ]);
    
    //     // Store payment details in database
    //     $payment = Appointment::create([
    //         'name' => $request->name,
    //         // 'email' => $request->email,
    //         'phone' => $request->phone,
    //         'car_company' => $request->car_company,
    //         'car_name' => $request->car_name,
    //         'car_model' => $request->car_model,
    //         'service_id' => $request->service_id,
    //         'service_name' => $request->service_name,
    //         'amount' => $request->amount,
    //         'order_id' => $orderId,
    //         'status' => 0 // pending
    //     ]);
    //     return response()->json($response->json());

    // }

    // public function success(Request $request)
    // {
    //     // echo "heloo success";
    //     // die;
    //     // $orderId = $request->input('order_id');

    //     // if (!$orderId) {
    //     //     return redirect('/appointment')->with('error', 'Payment verification failed: Missing order ID');
    //     // }

    //     // // Verify payment status with Cashfree API
    //     // $url = (env('CASHFREE_ENV') === 'sandbox'
    //     //     ? "https://sandbox.cashfree.com/pg/orders/"
    //     //     : "https://api.cashfree.com/pg/orders/") . $orderId;

    //     // $headers = [
    //     //     "Content-Type: application/json",
    //     //     "x-api-version: 2022-01-01",
    //     //     "x-client-id: ".env('CASHFREE_API_KEY'),
    //     //     "x-client-secret: ".env('CASHFREE_API_SECRET')
    //     // ];

    //     // $curl = curl_init($url);
    //     // curl_setopt($curl, CURLOPT_URL, $url);
    //     // curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    //     // curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);

    //     // $response = curl_exec($curl);
    //     // $err = curl_error($curl);
    //     // curl_close($curl);

    //     // if ($err) {
    //     //     return redirect('/appointment')->with('error', 'Payment verification failed: '.$err);
    //     // }

    //     // $responseData = json_decode($response);

    //     // //dd($responseData);

    //     // // Update payment status in database
    //     // $payment = Appointment::where('order_id', $orderId)->first();

    //     // if ($payment) {
    //     //     $status = ($responseData->order_status === 'PAID') ? 1 : 0;

    //     //     $payment->update([
    //     //         'status' => $status,
    //     //         'other' => $responseData,
    //     //         'payment_id' => $responseData->cf_order_id ?? null,
    //     //         'payment_method' => $responseData->payment_method ?? null
    //     //     ]);

    //     //     if ($status === 1) {
    //     //         return redirect('/appointment')->with([
    //     //             'success' => 'Payment Successful!',
    //     //             'payment' => $payment,
    //     //         ]);
    //     //     }
    //     // }

    //     // return redirect('/appointment')->with('error', 'Payment verification failed for Order ID: ' . $orderId);

    //     $signature = $request->header('x-webhook-signature');
    //     $generated = base64_encode(
    //         hash_hmac(
    //             'sha256',
    //             $request->getContent(),
    //             env('CASHFREE_CLIENT_SECRET'),
    //             true
    //         )
    //     );
    
    //     if ($signature !== $generated) {
    //         abort(403);
    //     }
    
    //     $payload = $request->all();
    
    //     $orderId = $payload['order']['order_id'];
    //     $status  = $payload['order']['order_status'];
    
    //     if ($status === 'PAID') {
    //         DB::table('appointments')
    //             ->where('order_id', $orderId)
    //             ->update(['status' => 'PAID']);
    //     }
    
    //     if ($status === 'FAILED') {
    //         DB::table('appointments')
    //             ->where('order_id', $orderId)
    //             ->update(['status' => 'FAILED']);
    //     }
    
    //     return response()->json(['status' => 'ok']);
    // }
}
