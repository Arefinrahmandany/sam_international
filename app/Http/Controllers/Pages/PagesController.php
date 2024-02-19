<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    /**
     * Show extra page 404 Error
     */
    public function error404()
    {
        return view('admin.404');
    }

    /**
     * Show extra page Blank
     */
    public function blank()
    {
        return view('admin.blank');
    }

    /**
     * Show extra page Signup
     */
    public function signup()
    {
        return view('admin.signup');
    }

}
