<?php

namespace App\Http\Controllers\AdminPages\Visaprocess;

use App\Http\Controllers\Controller;
use App\Models\Passports_new;
use Illuminate\Http\Request;

class EmbassyController extends Controller
{
    public function index()
    {
        $passport = Passports_new::all();
        return view('admin.adminPages.man_power.ksaProcess.embassy',[
            'passport' => $passport
        ]);
    }

    public function update(Request $request, string $id)
    {
        $passport_number = $request->passport;
        $update_data = Passports_new::where('passport_number',$passport_number);

        // data store to table
        $update_data -> update([
            'passport_number'       => $request->passport,
            'visa_number'   => $request->visa_number,
            'supports'   => $request->supports,
            'okala'           => $request->okala,
            'first_Party'                  => $request->first_Party,
            'licence'                 => $request->licence,
            'qualification'             => $request->qualification,
            'police_clearance'               => $request->police_clearance,
            'incharge_number'                 => $request->incharge_number,
        ]);

        return back()->with('success', 'data inserted successfully');
    }


}
