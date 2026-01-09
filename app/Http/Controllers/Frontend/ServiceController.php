<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Service;

class ServiceController extends Controller
{

    public function index()
    {
        $services = Service::where('status', 1)->get();
        return view('frontend.services.index', compact('services'));
    }
    
    public function show($id)
    {
        $service = Service::findOrFail($id);
        return view('frontend.services.show', compact('service'));
    }

}
