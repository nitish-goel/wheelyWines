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

    public function appointments()
    {   
        $response = [];
        $records = Appointment::paginate(1);
        $response['users'] = $records;
        $response['thead'] = '<tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Phone</th>
                                <th>Vechile Company</th>
                                <th>Vechile Name</th>
                                <th>Vechile Model</th>
                                <th>Service</th>
                                <th>Payment</th>
                                <th>Status</th>
                                <th>Service Date</th>
                                </tr>';
        $tbody = [];
        foreach ($records as $key => $rec) {
                $srNo = $records->firstItem() + $key;
            $statusPayment = ($rec->status == 0)
            ? '<span class="badge bg-danger">Failed</span>'
            : (($rec->status == 1)
                ? '<span class="badge bg-success">Successful</span>'
                : '<span class="badge bg-warning text-dark">Error</span>');

            $tbody[$key]  = '<tr>
                                <td>' .$srNo .'</td>
                                <td>' .$rec->name .'</td>
                                <td>' .$rec->phone .'</td>
                                <td>' .$rec->car_company .'</td>
                                <td>' .$rec->car_name .'</td>
                                <td>' .$rec->car_model .'</td>
                                <td>' .$rec->service_name .'</td>
                                <td>₹' .number_format($rec->amount, 2) .'</td>
                                <td>' .$statusPayment .'</td>
                                <td>' .$rec->created_at .'</td>
                            </tr>';
        }
        $response['tbody'] = $tbody;
        $response['header'] = 'Appointments Report';
        return view('admin.reports', $response);
    }

    public function services()
    {
        $records = Service::paginate(10);
    
        $response['users'] = $records;
    
        // Table Head
        $response['thead'] = '
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Status</th>
                <th>Date</th>
                <th>Action</th>
            </tr>
        ';
    
        $tbody = [];
    
        foreach ($records as $key => $rec) {
    
            $srNo = $records->firstItem() + $key;
    
           
            $statusBadge = ($rec->status == 0)
            ? '<span class="badge bg-success">Active</span>'
            : '<span class="badge bg-danger">Inactive</span>';

            $flag = ($rec->status == 0) ? 'off' : 'on';
            $btnClass = ($flag === 'on') ? 'outline-success' : 'outline-danger';
            $btnText  = ($flag === 'on') ? 'Activate' : 'Deactivate';
            $btnIcon  = ($flag === 'on') ? 'bi-toggle-on' : 'bi-toggle-off';
            
            $statusBtn = '
                <button 
                    type="button"
                    class="statusBtn btn btn-sm btn-'.$btnClass.'"
                    data-id="'.$rec->id.'"
                    data-flag="'.$flag.'"
                    title="Click to '.$btnText.'"
                >
                    <i class="bi '.$btnIcon.'"></i> '.$btnText.'
                </button>
            ';
            $deleteBtn = '
                <button 
                    type="button"
                    class="deleteBtn btn btn-sm btn-outline-danger"
                    data-id="'.$rec->id.'"
                    title="Click to delete"
                >
                    <i class="bi bi-trash"></i> Delete
                </button>
            ';
    
            $tbody[] = '
                <tr>
                    <td>'.$srNo.'</td>
                    <td>'.$rec->name.'</td>
                    <td>'.$statusBadge.'</td>
                    <td>'.$rec->created_at.'</td>
                    <td>'.$statusBtn .'|'.$deleteBtn.'</td>
                </tr>
            ';
        }
    
        // JS Script
        $response['script'] = '
            <script>
            $(document).on("click", ".statusBtn", function () {
    
                if(!confirm("Are you sure for this action?")) return;
    
                let btn  = $(this);
                let id   = btn.data("id");
                let flag = btn.data("flag");
    
                $.ajax({
                    url: "'.route('service.update').'",
                    type: "POST",
                    data: {
                        _token: "'.csrf_token().'",
                        id: id,
                        flag: flag
                    },
                    success: function (response) {
                        if (response.success) {
                            // alert(response.message);
                            // location.reload(); // correct way
                            showToast(response.message, "success");

                        } else {
                            // alert(response.message);
                            showToast(response.message, "warning");
                        }
                    },
                    error: function () {
                        // alert("Something went wrong!");
                        showToast("Something went wrong!", "danger");

                    }
                });
            });
            $(document).on("click", ".deleteBtn", function () {
    
                if(!confirm("Are you sure for this action?")) return;
    
                let btn  = $(this);
                let id   = btn.data("id");
    
                $.ajax({
                    url: "'.route('service.delete').'",
                    type: "POST",
                    data: {
                        _token: "'.csrf_token().'",
                        id: id,
                    },
                    success: function (response) {
                        if (response.success) {                           
                            showToast(response.message, "success");
                        } else {
                            showToast(response.message, "warning");
                        }
                    },
                    error: function () {
                        showToast("Something went wrong!", "danger");
                    }
                });
            });
            </script>
        ';
    
        $response['tbody']  = $tbody;
        $response['header'] = 'All Services';
    
        return view('admin.reports', $response);
    }
    

    public function updateServiceStatus(Request $request)
    {
        $request->validate([
            'id'   => 'required|exists:services,id',
            'flag' => 'required|in:on,off',
        ]);
        
        $service = Service::find($request->id);
        
        if (!$service) {
            return response()->json([
                'success' => false,
                'message' => 'Service Not Found!'
            ]);
        }
        
        // Determine new status
        $newStatus = ($request->flag === "on") ? 0 : 1;
        $newStatusUpdated = ($request->flag === "on") ? 'Activated' : 'Deactivated';
    
        // Already same status
        if ($service->status == $newStatus) {
            return response()->json([
                'success' => false,
                'message' => 'Already Updated'
            ]);
        }
    
        // Update status
        $service->update([
            'status' => $newStatus
        ]);
    
        return response()->json([
            'success' => true,
            'message' => $newStatusUpdated .' Successfully',
            'status'  => $newStatus
        ]);
    }
    public function addService(Request $request)
    {
        $request->validate([
            'service_name'  => 'required|string',
        ]);
        // Check if service already exists
        $service = Service::where('name', $request->service_name)->first();
        // dd($service);
    
        if ($service) {            
            return redirect()->back()->withErrors(['error'=>'Service already exists!']);

        }
    
        // Create service
        Service::create([
            'name'  => $request->service_name,
        ]);
    
        return redirect()->back()->with('success', 'Service added successfully!');
    }
    
    public function deleteService(Request $request)
    {
        $request->validate([
            'id'   => 'required|integer|exists:services,id',
        ]);
        
        $service = Service::find($request->id);
        
        if (!$service) {
            return response()->json([
                'success' => false,
                'message' => 'Service Not Found!'
            ]);
        }     
        // dd($service);           
    
        $service->delete();    
        return response()->json([
            'success' => true,
            'message' => 'Service Deleted Successfully',
        ]);
    }
    

    public function logout()
    {
        Auth::guard('admin')->logout();
        return redirect()->route('login');
    }
   
}
