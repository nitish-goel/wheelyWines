<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Models\User;


class ManagementController extends Controller
{
    public function index()
    {
        return view('admin.home');
    }

    public function login(Request $request)
    {
        $userdata = $request->validate([
            'user_id' => 'required|string',
            'password' => 'required|string',
        ]);
        $login = Auth::guard('admin')->attempt($userdata);
            
        if(!empty($login)){
            return redirect()->route('dashboard');
        }else{
            return redirect()->route('login')->withErrors('Invalid name or password!!!');
        }
    }

    public function users()
    {
        $users = User::paginate(10);
        return view('admin.reports', compact('users'));
    }

    public function logout()
    {
          Auth::guard('admin')->logout();
            return redirect()->route('login');
    }
   
}
