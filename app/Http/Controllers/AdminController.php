<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;

class AdminController extends Controller
{
    public function login(){
        return view('auth.login');
    }
    public function loginProcess(Request $req){
        $rules = Validator::make($req->all(), ['email'=>'required',
                                            'password'=>'required']);
        if($rules->fails()){
            return back();
        }else{
            $req->session()->put(['email' => $req->email]);
            $req->session()->get('email'); 
            return redirect('/admin');  
            //return $req->session()->get('email'); 
        }
        
    }
    
    public function signin(){
        return view('auth.signin');
    
    }
    public function signinProcess(Request $req){
        $rules = Validator::make($req->all(), ['name'=>'required',
                                            'email'=>'required',
                                            'password'=>'required']);
        if($rules->fails()){
            return back();
        }else{
            return redirect('/login');   
        }
        
    }
    public function logout(Request $req){
        $req->session()->forget('email');
        return redirect('/login');    
    }
    

}
