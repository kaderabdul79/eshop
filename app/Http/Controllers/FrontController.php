<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index(){
        return view('frontend.home');
    }

    public function shirts(){
        return view('frontend.shirts');
    }

    public function shirt(){
        return view('frontend.shirt');
    }
}
