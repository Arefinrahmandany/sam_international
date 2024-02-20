<?php

namespace App\Http\Controllers\AdminPages\ManPower;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class KsaProcessController extends Controller
{
    public function index()
    {
        return view('admin.adminPages.man_power.ksaProcess.index');
    }
}
