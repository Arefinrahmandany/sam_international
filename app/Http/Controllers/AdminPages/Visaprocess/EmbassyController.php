<?php

namespace App\Http\Controllers\AdminPages\Visaprocess;

use App\Models\Embassy;
use App\Models\Passports;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class EmbassyController extends Controller
{
    public function index()
    {
        $embassy = Embassy::latest()->where('trash','0')->where('status','1')->get();
        $embassyList = Embassy::latest()->where('trash','0')->where('status','1')->get();
        $passport = Passports::latest()->where('trash','0')->where('status','1')->get();
        return view('admin.adminPages.man_power.ksaProcess.embassy',[
            'passport' => $passport,
            'embassy' => $embassy,
            'embassyList' => $embassyList,
            'form_type' => 'create',
        ]);
    }

    public function store(Request $request)
    {
        // data store to table
        Embassy::create([
            'passport'          => $request->passport,
            'supports'          => $request->supports,
            'okala'             => $request->okala,
            'first_Party'       => $request->first_Party,
            'licence'           => $request->licence,
            'qualification'     => $request->qualification,
            'police_clearance'  => $request->police_clearance,
            'incharge_number'   => $request->incharge_number,
        ]);

        return back()->with('success', 'data inserted successfully');
    }

    public function edit(string $id)
    {
        $embassy = Embassy::findorFail($id);
        $embassyList = Embassy::latest()->where('trash','0')->where('status','1')->get();
        $passport = Passports::latest()->where('trash','0')->where('status','1')->get();
        return view('admin.adminPages.man_power.ksaProcess.embassy',[
            'passport' => $passport,
            'embassy' => $embassy,
            'embassyList' => $embassyList,
            'form_type' => 'edit',
        ]);
    }

    public function update(Request $request, string $id)
    {
        $update_data = Embassy::findorFail($id);

        $update_data->update([
            'passport'          => $request->passport,
            'visa_number'       => $request->visa_number,
            'supports'          => $request->supports,
            'okala'             => $request->okala,
            'first_Party'       => $request->first_Party,
            'licence'           => $request->licence,
            'qualification'     => $request->qualification,
            'police_clearance'  => $request->police_clearance,
            'incharge_number'   => $request->incharge_number,
        ]);
        return redirect()->route('embassy.index')->with('success','Data Update Successfully!!');
    }
    public function trash(string $id)
    {
        $data = Embassy::findorfail($id);
        if($data -> trash){
            $data -> update([
                'trash'=>false
            ]);
        }else{
            $data -> update([
                'trash'=>true
            ]);
        }
        return back()->with('success-table','Data Deleted successfull');
    }
}
