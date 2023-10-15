<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminPageController extends Controller
{
    /**
     * Show Dashboard Page
    */

    public function showdashboard(){

        return view('backend.page.accounts.accounts');

    }
}
