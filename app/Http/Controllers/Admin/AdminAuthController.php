<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class AdminAuthController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function showloginForm()
    {
        return view('admin.signin');
    }



    /**
     * Show Admin Login System With authentication
     */
    public function login(Request $request)
    {
               //validetion
            $this-> validate($request,[
                'auth'      => 'required',
                'password'  => 'required',
            ]);

            // Authentication System

            if(Auth::guard('admin') -> attempt(['username'=>$request->auth,'password'=>$request->password])
            ||Auth::guard('admin') -> attempt(['cell'=>$request->auth,'password'=>$request->password])
            ||Auth::guard('admin') -> attempt(['email'=>$request->auth,'password'=>$request->password]))
        {
            if(Auth::guard('admin')->user()->status && Auth::guard('admin')->user()-> tresh == false)
            {
                return redirect()->route('dashboard.index');
            }else{
                Auth::guard('admin')->logout();
                return redirect()->route('admin.login.form')-> with('warning','Your registration canceled, please contact with authority');
            }
        }else{
            return redirect()->route('admin.login.form')-> with('warning','check your User Id & Password');
        }

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.signup');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
    public function logout(){

        Auth::guard('admin') -> logout();
        return redirect()->route('home.index');

    }
}
