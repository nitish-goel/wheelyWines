<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Appointment;
use App\Models\Service;
use App\Models\Admin;


class ManagementController extends Controller
{
    public function index()
    {
        $response = [];
        $response['users'] = User::count();
        $response['today_joined_users'] = User::whereDate('created_at', Carbon::today())->count();

        $response['total_Appointment'] = Appointment::where('status', 1)->count();
        $response['today_Appointment'] = Appointment::whereDate('created_at',Carbon::today())->where('status', 1)->count();
        // $response['total_pending_appointment'] = Appointment::where('status', 1)->where('service_status', 0)->count();
        // $response['total_completed_appointment'] = Appointment::where('status', 1)->where('service_status', 1);

        $response['total_appointment_payment'] = Appointment::where('status',1)->sum('amount');
        $response['today_appointment_payment'] = Appointment::whereDate('created_at',Carbon::today())->where('status', 1)->sum('amount');
        // dd($response);
        return view('admin.home',$response);
    }

    public function login(Request $request)
    {
        $userdata = $request->validate([
            'user_id' => 'required|string',
            'password' => 'required|string',
        ]);
        $login = Auth::guard('admin')->attempt($userdata);
            
        if(!empty($login)){
            return redirect()->route('dashboard');
        }else{
            return redirect()->route('login')->withErrors('Invalid name or password!!!');
        }
    }

    public function users()
    {   
        $response = [];
        $records = User::paginate(10);
        $response['users'] = $records;
        $response['thead'] = '<tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Phone</th>
                                <th>Total Service</th>
                                <th>Last Service</th>
                                <th>Joining Date</th>
                                </tr>';
        $tbody = [];
        foreach ($records as $key => $rec) {
            // extract($rec);
            $tbody[$key]  = '<tr>
                                <td>' .$rec->id .'</td>
                                <td>' .$rec->name .'</td>
                                <td>' .$rec->phone .'</td>
                                <td>' .$rec->total_service .'</td>
                                <td>' .$rec->updated_at->format('Y-m-d') .'</td>
                                <td>' .$rec->created_at .'</td>
                            </tr>';
            // $i++;
        }
        $response['tbody'] = $tbody;
        $response['header'] = 'All-Users Report';
        return view('admin.reports', $response);
    }

    public function qr_code()
    {
        $response = [];
        $admin = Admin::first();

        $response['qr_image'] =  ((!empty($admin->payment_QR))?$admin->payment_QR:null);

        return view('admin.payment_form',$response);
    }
    
    public function update_QR(Request $request)
    {
        $request->validate([
            'qr_image' => 'required|image|mimes:jpg,jpeg,png|max:2048'
        ]);

        // Get first admin record (assuming single admin)
        $admin = Admin::first();
        // dd($admin);

        if (!$admin) {
            return response()->json([
                'success' => false,
                'message' => 'Admin record not found'
            ]);
        }

        // Store new QR image
        $imageName = 'QR_image'.time() . '.' . $request->qr_image->extension();
        $request->qr_image->move(public_path('uploads/qr'), $imageName);
        // print_r($imageName);

        // Check if already same image
        if ($admin->payment_QR == $imageName) {
            return response()->json([
                'success' => false,
                'message' => 'Already Updated!!!'
            ]);
        }

        // Delete old image (optional but recommended)
        if ($admin->payment_QR && file_exists(public_path('uploads/qr/' . $admin->payment_QR))) {
            unlink(public_path('uploads/qr/' . $admin->payment_QR));
        }

        // Update database
        $admin->update([
            'payment_QR' => $imageName
        ]);

        return response()->json([
            'success' => true,
            'message' => 'QR Updated Successfully'
        ]);
    }

    public function logout()
    {
        Auth::guard('admin')->logout();
        return redirect()->route('login');
    }
   
}
