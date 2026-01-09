<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Appointment;

class BookingController extends Controller
{

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
