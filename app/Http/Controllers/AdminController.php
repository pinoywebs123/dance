<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Announcement;
use App\Models\User;
use App\Models\DanceClass;
use App\Models\OwnRating;
use App\Mail\FailNotification;
use App\Mail\PassNotification;
use Mail;

use App\Models\ForgotPassword as ForgotPasswordModel;

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
        $anns = Announcement::where('status_id',1)->get();
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
        $dances = DanceClass::where('status_id',1)->get();
        return view('admin.dance_class',compact('dances'));
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

    public function announcement_edit($id)
    {
        $find = Announcement::find($id);
        return view('admin.announcement_edit',compact('find')); 
    }

    public function announcement_update(Request $request)
    {
        $find = Announcement::find($request->announcement_id);
        if($find)
        {
            $find->update([
                'link'      => $request->video_link,
                'content'   => $request->content
            ]);

            return redirect()->back()->with('success','Updated Successfully!');
        }
    }

    public function announcement_new_check(Request $request)
    {
        $ann = new Announcement;
        $ann->user_id   = Auth::id();
        $ann->status_id = 1;
        $ann->link      = $request->video_link;
        $ann->content   = $request->content;
        $ann->save();
        return redirect()->route('admin_home2')->with('success','Submit Successfully!');
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

    public function profile()
    {
        return view('admin.profile');
    }

    public function profile_edit()
    {
        return view('admin.profile_edit');
    }

    public function profile_update(Request $request)
    {
        $find = User::find(Auth::id());
        if($find)
        {
            $find->update([
                'program'   => $request->program,
                'college'   => $request->college,
                'contact'   => $request->contact,
                'fb_link'   => $request->fb_link,
            ]);

            return redirect()->back()->with('success','Updated Successfully!');
        }
    }

    public function dance_class_create()
    {
        return view('admin.dance_class_create');
    }

    public function dance_class_create_check(Request $request)
    {
        $dance = new DanceClass;
        $dance->user_id         = Auth::id();
        $dance->status_id       = 1;
        $dance->topic           = $request->topic;
        $dance->date            = $request->date;
        $dance->time            = $request->time; 
        $dance->link            = $request->link;
        $dance->link_password   = $request->link_password;
        $dance->save();
        return redirect()->route('admin_dance_class')->with('success','Dance Class Created Successfully!');
    }

    public function dance_class_delete($id)
    {
       $find = DanceClass::find($id);
       if($find)
       {
            $find->delete();
            return redirect()->back()->with('success','Dance Class Deleted Successfully!');
       }
    }

    public function dance_class_edit($id)
    {
       $find = DanceClass::find($id);
       if($find)
       {
           return view('admin.dance_class_edit',compact('find'));
       }
    }

    public function dance_class_update(Request $request)
    {
       $find = DanceClass::find($request->dance_class_id);
       if($find)
       {
            $find->update([
                'topic'           => $request->topic,
                'date'            => $request->date,
                'time'            => $request->time, 
                'link'            => $request->link,
                'link_password'   => $request->link_password
            ]);
            return redirect()->back()->with('success','Dance Class Updated Successfully!');
       }
    }

    public function audition_rating(Request $request)
    {
        $find = OwnRating::where('audition_id', $request->user_id)->first();
        if($find)
        {
            return redirect()->back()->with('success','Rated Already!');
        
        }
            
        $find_user = User::find($request->user_id);
        $score = ($request->music + $request->originality + $request->choreography + $request->personality + $request->memory) / 5;

        if($score >= 3)
        {
            $salutation = 'Congratulation You have Passed the Audition';
            $token = rand(123456789,987654321);

            ForgotPasswordModel::create([
                'email' => $find_user->email,
                'token' => $token
            ]);

            Mail::to($find_user->email)->send(new PassNotification($find_user->email, $salutation, $token));
            $find_user->update(['status_id'=> 1]);
        }else 
        {
            $salutation = 'Sorry You Failed the Audition';
            Mail::to($find_user->email)->send(new FailNotification($find_user->email, $salutation));
        }

        $rate = new OwnRating;
        $rate->audition_id = $request->user_id;
        $rate->coach_id = Auth::id();
        $rate->remark = $score;
        $rate->music = $request->music;
        $rate->originality = $request->originality;
        $rate->choreography = $request->choreography;
        $rate->personality = $request->personality;
        $rate->memory = $request->memory;
        $rate->save();
        return redirect()->back()->with('success','Rating Submitted Successfully!');
    }


}
