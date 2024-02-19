<?php

namespace App\Http\Controllers\AdminPages\ManPower;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PassportReturnController extends Controller
{
    public function index()
    {
        return view('admin.adminPages.passport_return.index');
    }
}
