<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PagesController extends Controller
{

    /**
     * Show extra page Button
     */
    public function button()
    {
        return view('admin.button');
    }

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
     * Show extra page chart
     */
    public function chart()
    {
        return view('admin.chart');
    }

    /**
     * Show extra page form
     */
    public function form()
    {
        return view('admin.form');
    }


    /**
     * Show extra page Signup
     */
    public function signup()
    {
        return view('admin.signup');
    }

    /**
     * Show extra page table
     */
    public function table()
    {
        return view('admin.table');
    }

    /**
     * Show extra page Typography
     */
    public function typography()
    {
        return view('admin.typography');
    }

    /**
     * Show extra page Wadget
     */
    public function widget()
    {
        return view('admin.widget');
    }

    /**
     * Show extra page Wadget
     */
    public function element()
    {
        return view('admin.element');
    }

}
