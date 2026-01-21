<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;


class ManagementController extends Controller
{
    public function index()
    {
        return view('admin.home');
    }
    public function login(Request $request)
    {
        $credentials = $request->validate([
            'name' => 'required|string',
            'password' => 'required'
        ]);
        // dd($credentials);
       if(!empty($credentials)){
            if ($credentials['name'] == 'wineadmin' && $credentials['password'] == '$591100') {
                return redirect()->route('dashboard');
                echo "Successfully Login";
            }else{
                return back()->withErrors('Invalid name or password!!!');
            }
       }else{
            // return back();
            return redirect()->route('login');

        }

        //    if(Auth::attempt($credentials)){
        //         return redirect()->route('header');
        //    }else{
        //     return back()->withErrors([
        //         'email' => 'Invalid email or password'
        //     ])->withInput();
        //     }

            // return view("login");
    }

    // public function showServices()
    // {
    //     $services = DB::table('services')->get();
    //     // return $services;
    //     foreach ($services as $key => $service) {
    //         echo    $service->name.'<br>';     
    //     }
    // }
   
}
