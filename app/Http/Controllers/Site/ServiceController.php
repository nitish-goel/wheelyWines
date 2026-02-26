<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Service;

class ServiceController extends Controller
{

    public function index()
    {
        $services = Service::where('status', 1)->get();
        return view('site.services.index', compact('services'));
    }
    
    public function show($id)
    {
        $service = Service::findOrFail($id);
        return view('site.services.show', compact('service'));
    }

}
