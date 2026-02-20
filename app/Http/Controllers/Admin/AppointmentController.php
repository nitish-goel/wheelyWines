<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
use App\Models\Appointment;


class AppointmentController extends Controller
{
    public function appointments()
    {   
        $response = [];
        $records = Appointment::paginate(10);
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
}
