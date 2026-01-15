<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Service;
use App\Models\Appointment;

class BookingController extends Controller
{

    public function index()
    {
        $services = Service::where('status', 0)->get();
        echo '<pre>';
        print_r($services);
        echo ' </pre>';
        die;
        return view('Site.booking.index', compact('services'));
    }
    public function store(Request $request)
    {
        $request->validate([
            'service_id' => 'required',
            'service_date' => 'required|date',
        ]);
    
        Appointment::create([
            'service_id' => $request->service_id,
            'user_id' => auth()->id(),
            'service_date' => $request->service_date,
        ]);
    
        return redirect()->route('home')->with('success', 'Appointment Booked!');
    }
}
