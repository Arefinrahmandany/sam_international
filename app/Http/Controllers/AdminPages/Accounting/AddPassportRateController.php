<?php

namespace App\Http\Controllers\AdminPages\Accounting;

use App\Http\Controllers\Controller;
use App\Models\Passports;
use Illuminate\Http\Request;

class AddPassportRateController extends Controller
{
    public function index()
    {
        $passports = Passports::all();
        return view('admin.adminPages.accounting.addPassportRate',[
            "passports" => $passports,
        ]);
    }
}
