<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
use App\Models\Appointment;


class AppointmentController extends Controller
{
    public function appointments($getStatus = 0)
    {   
        $response = [];
        $checkStatus = 0;
        if(in_array($getStatus,[1,2])){
            $checkStatus = $getStatus;
        }
        $records = Appointment::where('status', $checkStatus)->orderBy('id','desc')->paginate(10);

        // dd($records);
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
                                <th>Transaction ID</th>
                                <th>Status</th>
                                <th>Date</th>'
                                . ($checkStatus == 0 ? '<th>Action</th>' : '') .
                                '</tr>';
        $tbody = [];
        foreach ($records as $key => $rec) {
            $srNo = $records->firstItem() + $key;
            $statusPayment = ($rec->status == 0)
            ? '<span class="badge bg-warning">Pending</span>'
            : (($rec->status == 1)
                ? '<span class="badge bg-success">Approved</span>'
                : '<span class="badge bg-danger">Declined</span>');

            $approveBtn = '
                <button 
                    type="button"
                    class="approveBtn btn btn-sm btn-outline-success"
                    data-id="'.$rec->id.'"
                    data-flag="approve"
                    title="Click to Approve"
                >
                    <i class="bi bi-toggle-on"></i> Approve
                </button>
            ';
            $declineBtn = '
                <button 
                    type="button"
                    class="declineBtn btn btn-sm btn-outline-danger"
                    data-id="'.$rec->id.'"
                    data-flag="decline"
                    title="Click to Decline"
                >
                    <i class="bi bi-toggle-off"></i> Decline
                </button>
            ';
            $tbody[$key]  = '<tr>
                                <td>' .$srNo .'</td>
                                <td>' .$rec->name .'</td>
                                <td>' .$rec->phone .'</td>
                                <td>' .$rec->car_company .'</td>
                                <td>' .$rec->car_name .'</td>
                                <td>' .$rec->car_model .'</td>
                                <td>' .$rec->service_name .'</td>
                                <td>₹' .number_format($rec->amount, 2) .'</td>
                                <td>' .$rec->transaction_id .'</td>
                                <td>' .$statusPayment .'</td>
                                <td>' .$rec->created_at .'</td>'
                                . ($checkStatus == 0 ? '<td>' .$approveBtn .' | '.$declineBtn .'</td>' : '') .                                
                            '</tr>';
        }
        $response['script'] = '
        <script>
        $(document).on("click", ".approveBtn, .declineBtn", function () {

            if(!confirm("Are you sure for this action?")) return;

            let btn  = $(this);
            let id   = btn.data("id");
            let flag = btn.data("flag");

            $.ajax({
                url: "'.route('updateAppointment').'",
                type: "POST",
                data: {
                    _token: "'.csrf_token().'",
                    id: id,
                    flag: flag
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
        $response['tbody'] = $tbody;
        $response['header'] = 'Appointments Report';
        return view('admin.reports', $response);
    }

    public function updateStatus(Request $request)
    {
        $request->validate([
            'id'   => 'required',
            'flag' => 'required|in:approve,decline',
        ]);
        
        $appointment = Appointment::find($request->id);
        
        if (!$appointment) {
            return response()->json([
                'success' => false,
                'message' => 'Appointment Not Found!'
            ]);
        }
        
        // Determine new status
        $newStatus = ($request->flag === "approve") ? 1 : 2;
        $newStatusUpdated = ($request->flag === "approve") ? 'Approved' : 'Declined';
    
        // Already same status
        if ($appointment->status == $newStatus) {
            return response()->json([
                'success' => false,
                'message' => 'Already '.$newStatusUpdated
            ]);
        }
    
        // Update status
        $appointment->update([
            'status' => $newStatus
        ]);
    
        return response()->json([
            'success' => true,
            'message' => $newStatusUpdated .' Successfully',
            'status'  => $newStatus
        ]);
    }
    // public function appointments()
    // {   
    //     $response = [];
    //     $records = Appointment::paginate(10);
    //     $response['users'] = $records;
    //     $response['thead'] = '<tr>
    //                             <th>#</th>
    //                             <th>Name</th>
    //                             <th>Phone</th>
    //                             <th>Vechile Company</th>
    //                             <th>Vechile Name</th>
    //                             <th>Vechile Model</th>
    //                             <th>Service</th>
    //                             <th>Payment</th>
    //                             <th>Transaction ID</th>
    //                             <th>Status</th>
    //                             <th>Date</th>
    //                             </tr>';
    //     $tbody = [];
    //     foreach ($records as $key => $rec) {
    //             $srNo = $records->firstItem() + $key;
    //         $statusPayment = ($rec->status == 0)
    //         ? '<span class="badge bg-warning">Pending</span>'
    //         : (($rec->status == 1)
    //             ? '<span class="badge bg-success">Successful</span>'
    //             : '<span class="badge bg-danger">Failed</span>');

    //         $tbody[$key]  = '<tr>
    //                             <td>' .$srNo .'</td>
    //                             <td>' .$rec->name .'</td>
    //                             <td>' .$rec->phone .'</td>
    //                             <td>' .$rec->car_company .'</td>
    //                             <td>' .$rec->car_name .'</td>
    //                             <td>' .$rec->car_model .'</td>
    //                             <td>' .$rec->service_name .'</td>
    //                             <td>₹' .number_format($rec->amount, 2) .'</td>
    //                             <td>' .$rec->transaction_id .'</td>
    //                             <td>' .$statusPayment .'</td>
    //                             <td>' .$rec->created_at .'</td>
    //                         </tr>';
    //     }
    //     $response['tbody'] = $tbody;
    //     $response['header'] = 'Appointments Report';
    //     return view('admin.reports', $response);
    // }
}
