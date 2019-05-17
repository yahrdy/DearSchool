<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RouteController extends Controller
{
    public function home(){
        if ((auth()->user()->profile->class == 9 || auth()->user()->profile->class == 10)&&(auth()->user()->profile->group == 'science'))
            return view('lessons.ssc.home');
        elseif ((auth()->user()->profile->class == 11 || auth()->user()->profile->class == 12)&&(auth()->user()->profile->group == 'science'))
            return view('lessons.hsc.home');
    }
    public function bangla(){

    }
    public function english(){

    }
    public function general_math(){

    }
    public function physics(){

    }
    public function chemistry(){

    }
    public function higher_math(){

    }
    public function ict(){
        if (auth()->user()->profile->class == 9 || auth()->user()->profile->class == 10)
            return view('lessons.ssc.ict.home');
    }
}
