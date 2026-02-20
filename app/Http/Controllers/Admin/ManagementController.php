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
                                <th>Services</th>
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
                                <td>' .$rec->services_completed .'</td>
                                <td>' .$rec->updated_at->format('Y-m-d') .'</td>
                                <td>' .$rec->created_at .'</td>
                            </tr>';
            // $i++;
        }
        $response['tbody'] = $tbody;
        $response['header'] = 'All-Users Report';
        return view('admin.reports', $response);
    }

    public function logout()
    {
        Auth::guard('admin')->logout();
        return redirect()->route('login');
    }
   
}
