<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Announcement;
use App\Models\User;

class AdminController extends Controller
{
    public function logout()
    {
        Auth::logout();
        return redirect('/login');
    }
    
    public function home()
    {

        return view('admin.index');
    }

    public function home2()
    {
        $anns = Announcement::all();
        return view('admin.home',compact('anns'));
    }

    public function members()
    {
        return view('admin.members');
    }

    public function coaches()
    {
        $coaches = User::where('role_id',2)->get();
        return view('admin.coaches',compact('coaches'));
    }

    public function dance_class()
    {
        return view('admin.dance_class');
    }

    public function audition()
    {
        $auds = User::where('role_id',3)->get();
        return view('admin.audition',compact('auds'));
    }

    public function announcement_new()
    {
        return view('admin.announcement_add');
    }

    public function announcement_new_check(Request $request)
    {
        $ann = new Announcement;
        $ann->user_id   = Auth::id();
        $ann->status_id = 1;
        $ann->link      = $request->video_link;
        $ann->content   = $request->content;
        $ann->save();
        return redirect()->back()->with('success','Submit Successfully!');
    }

    public function announcement_archive($id)
    {
        $find = Announcement::find($id);
        if($find)
        {
            $find->update(['status_id'=> 0]);
            return redirect()->back()->with('success','Archive Successfully!');
        }
    }

    public function audition_info($id)
    {
        $find = User::find($id);
        if($find)
        {
            return view('admin.audition_info',compact('find'));
        }
    }

    public function audition_pass($id)
    {
        $find = User::find($id);
        if($find)
        {
            $find->update(['status_id'=> 1]);
            return redirect()->back()->with('success','Status Updated Successfully!');
        }
    }

    public function audition_fail($id)
    {
        $find = User::find($id);
        if($find)
        {
            $find->update(['status_id'=> 2]);
            return redirect()->back()->with('success','Status Updated Successfully!');
        }
    }

    public function coach_info($id)
    {
        $find = User::find($id);
        if($find)
        {
            return view('admin.coach_info',compact('find'));
        }
    }

    public function coach_status($id)
    {
        $find = User::find($id);
        if($find)
        {
            if($find->status_id == 1)
            {
                $find->update(['status_id'=> 0]);
            }else
            {
                $find->update(['status_id'=> 1]);
            }
            
            return redirect()->back()->with('success','Status Updated Successfully!');
        }
    }


}
