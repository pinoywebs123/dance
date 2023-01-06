<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CoachController extends Controller
{
    

    public function home()
    {
        return view('coach.home');
    }
}
