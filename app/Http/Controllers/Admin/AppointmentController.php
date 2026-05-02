<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
use App\Models\Appointment;


class AppointmentController extends Controller
{
    public function appointments($getStatus = 1)
    {   
        $response = [];  
        $query = Appointment::query();      
        if(in_array($getStatus,[0,1])){

            if ($getStatus == 1) {
                $query->where('payment_status', 'PAID');
                $header = 'Appointments';
            } else {
                $query->where('payment_status', '!=', 'PAID');
                $header = 'Failed Appointments';
            }
        }
        $records = $query->orderBy('id','desc')->paginate(10);
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
                                <th>Payment Status</th>
                                <th>Date</th>
                                </tr>';
        $tbody = [];
        foreach ($records as $key => $rec) {
            $srNo = $records->firstItem() + $key;
            $statusPayment = ($rec->payment_status == 'PAID')
            ? '<span class="badge bg-success">paid</span>'
            : '<span class="badge bg-danger">failed</span>';
           
            $tbody[$key]  = '<tr>
                                <td>' .$srNo .'</td>
                                <td>' .ucfirst($rec->name) .'</td>
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
        $response['script'] = '';
        $response['tbody'] = $tbody;
        $response['header'] = $header;
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
