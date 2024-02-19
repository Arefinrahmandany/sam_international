<?php

namespace App\Http\Controllers\AdminPages;

use App\Http\Controllers\Controller;
use App\Models\Passports_new;
use App\Models\Medical;
use Illuminate\Http\Request;

class MedicalController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $Passports_data = Passports_new::latest()->where('tresh','0')->get();
        return view('admin.adminPages.medical.index',[
            'data' => $Passports_data,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function medicalReportEdit(string $id)
    {
        $data =  Passports_new::findorFail($id);

            if($data -> medical_report){
                $data -> update([
                    'medical_report'=>false
                ]);
            }else{
                $data -> update([
                    'medical_report'=>true
                ]);
            }

            return back()->with('success-table','Data update successfull');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $update_data = Passports_new::findorfail($id);

        // data store to table
        $update_data -> update([
            'medical_date'          => $request -> medical_date,
            'medical_expiryDate'    => $request -> medical_expiryDate,

        ]);


        //redirect to back same page
        return redirect()->route('medical.index')->with('success','Data successfully update');
    }

}
