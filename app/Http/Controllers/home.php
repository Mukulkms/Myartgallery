<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class home extends Controller
{

    public function welcome(){
        return view('home');
    }
    public function home(){
        return view('home');
    }
    public function about(){
        return view('layouts.about');
    }
}
