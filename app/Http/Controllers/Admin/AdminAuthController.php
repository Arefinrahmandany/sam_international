<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class AdminAuthController extends Controller
{
    /**
     * Show Admin Login Page
     */

     public function showloginForm(){

        return view('frontend.signIn');

    }


    /**
     * Admin Login System
     */

     public function login(Request $request)
     {

        //validetion

        $this-> validate($request,[
            'auth' => 'required',
            'password' => 'required',
        ]);


        // Login System

        if(Auth::guard('admin') -> attempt(['username'=>$request->auth,'password'=>$request->password])
            ||Auth::guard('admin') -> attempt(['cell'=>$request->auth,'password'=>$request->password])
            ||Auth::guard('admin') -> attempt(['email'=>$request->auth,'password'=>$request->password]))
        {

            return redirect()->route('admin.dashboard');
        }else{
            return redirect()->route('admin.login.form')-> with('warning','not connected');
        }



    }

    /**
     * Show Admin Login Page
     */

    public function logout(){

        Auth::guard('admin') -> logout();
        return redirect()->route('home.index');

    }




}
