<?php

namespace App\Http\Controllers\AdminPages\Reports;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ManpowerReportController extends Controller
{
    public function index()
    {
        return view('admin.adminPages.reports.manPowerReport');
    }
}
