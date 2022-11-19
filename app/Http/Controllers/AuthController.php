<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class AuthController extends Controller
{
    
    public function login()
    {
        return view('auth.login');
    }

    public function apply()
    {
        return view('auth.apply');
    }

    public function forgot()
    {
        return view('auth.forgot');
    }

    public function check_apply(Request $request)
    {
        $length = 10;    
        $temp_password = substr(str_shuffle('ABCDEFGHIJKLMNOPQRSTUVWXYZ'),1,$length);

       $data = $request->except('_token');
       $data['status_id'] = 0;
       $data['password'] = bcrypt($temp_password);



       User::create($data);

       return back()->with('success','You have Registered Successfully. Please check your email.');
    }

    public function login_check(Request $request)
    {
        return $request->all();
    }
}
