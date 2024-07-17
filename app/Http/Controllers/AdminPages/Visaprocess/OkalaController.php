<?php

namespace App\Http\Controllers\AdminPages\Visaprocess;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class OkalaController extends Controller
{
    public function index()
    {
        return view('admin.adminPages.man_power.ksaProcess.okala');
    }
}
