<?php

namespace App\Http\Controllers\AdminPages\ManPower;

use App\Models\Passports;
use Illuminate\Http\Request;
use App\Models\PassportDelivery;
use App\Http\Controllers\Controller;

class PassportDeliveryController extends Controller
{
    public function index()
    {
        $all_passports = Passports::where('passportStatus','!=', null)->latest()->get();
        $working_passports = Passports::where('passportStatus','=', null)->latest()->get();
        return view('admin.adminPages.delivery.index',[
            'all_passports' => $all_passports,
            'working_passports' => $working_passports
        ]);
    }

    public function delivery(Request $request)
    {
        $passport_number = $request->passport;
        $passport_status = $request->workStatus;

        PassportDelivery::create([
            'passport'   => $request->passport,
            'workStatus' => $request->workStatus,
        ]);

        $updateData = Passports::where('passport',$passport_number);

        $updateData->update([
            'passportStatus' => $passport_status,
        ]);

        //redirect to back same page
        return back() -> with('success-table','Data successfully Updated');
    }


}
