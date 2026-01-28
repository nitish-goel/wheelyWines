<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Service;

class HomeController extends Controller
{
    // HomeController.php
    public function index()
    {
        // $response = [];
        // $response['Services'] = Service::where('status', 0)->get();
        return view('site.index');
    }

}
