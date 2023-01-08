<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

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

    public function apply_check(Request $request)
    {
        $user = new User;
        $user->role_id = 3;
        $user->student_id = $request->student_id;
        $user->name = $request->full_name;
        $user->age = $request->age;
        $user->sex = $request->sex;
        $user->college_year = $request->college_year;
        $user->college = $request->college;
        $user->program = $request->program;
        $user->contact = $request->telephone;
        $user->email = $request->email;
        $user->fb_link = $request->fb_link;
        $user->youtube_link = $request->youtube_link;
        $user->status_id = 0;
        $user->password = bcrypt(rand(123456789,987654321));
        $user->save();
        return redirect()->back()->with('success','Submit Successfully!');
    }

    public function forgot()
    {
        return view('auth.forgot');
    }

   

    public function login_check(Request $request)
    {
        $data = $request->only('email','password');
       if(Auth::attempt($data))
       {
        if(Auth::user()->status_id == 0)
        {
            Auth::logout();
            return redirect('/login');
        }
            if(Auth::user()->role_id == 1)
            {
                return redirect()->route('admin_home');
                
            }else if(Auth::user()->role_id == 2)
            {
                 return redirect()->route('admin_home');
            }else if(Auth::user()->role_id == 3)
            {
                return redirect()->route('admin_home');
            }
       }else
       {
        return 'Invalid Email/Password Combination';
       }
        
    }
}
