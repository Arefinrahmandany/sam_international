<?php

namespace App\Http\Controllers\AdminPages\ManPower;

use App\Models\Mofa;
use App\Models\Passports;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MofaController extends Controller
{
    public function index()
    {
        $passport = Passports::all();
        return view('admin.adminPages.man_power.ksaProcess.Mofa.index',[
            'passport' => $passport
        ]);

    }

    public function store(Request $request)
    {
        Mofa::create([
            'passport'          =>  $request-> passport,
            'visaNumber'        =>  $request-> visaNumber,
            'sponser'           =>  $request-> sponser,
            'occupetion'        =>  $request-> occupetion,
            'purpose'           =>  $request-> purpose,
            'finger'            =>  $request-> finger,
            'training'          =>  $request-> training,
            'attested'          =>  $request-> attested,
            'medical_report'    =>  $request-> medical_report,
        ]);

        return back()->with('success','Data inserted successfully');
    }
}
