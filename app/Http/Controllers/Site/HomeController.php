<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    // HomeController.php
    public function index()
    {
        return view('site.index');
    }

}
