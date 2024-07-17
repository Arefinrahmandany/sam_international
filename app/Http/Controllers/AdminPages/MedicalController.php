<?php

namespace App\Http\Controllers\AdminPages;

use App\Models\Medical;
use App\Models\Passports;
use Illuminate\Http\Request;
use App\Models\Passports_new;
use App\Http\Controllers\Controller;

class MedicalController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $passports_data = Medical::latest()->where('trash','0')->where('status','1')->get();
        $passport_data = Passports::latest()->where('trash','0')->where('status','1')->get();
        return view('admin.adminPages.medical.index',[
            'medical_data' => $passports_data,
            'passport_data' => $passport_data,
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'passport' => 'required',
        ]);

        $existingMedical = Medical::where('passport', $request->passport)->first();

        if ($existingMedical) {
            // Update existing record
            $issueDateStat = $existingMedical->issueDate;

            if(empty($issueDateStat)){

                $request->validate([
                    'issueDate' => 'required',
                    'expiryDate' => 'nullable',
                ]);

                $existingMedical->update([
                    'issueDate' => $request->issueDate,
                    'expiryDate' => $request->expiryDate,
                ]);
                return back()->with('success', 'Medical Data inserted!');

            }elseif(!empty($issueDateStat)){
                $existingMedical->update([
                    'expiryDate' => $request->expiryDate,
                ]);
                return back()->with('success', 'Medical Data Expiry Date Updated !!!');
            }

            return back()->with('success', 'Medical Data updated!');
        } else {
            // Create a new record
            $request->validate([
                'issueDate' => 'required|date',
                'expiryDate' => 'nullable|date',
            ]);

            Medical::create([
                'passport' => $request->passport,
                'issueDate' => $request->issueDate,
                'expiryDate' => $request->expiryDate,
            ]);

            return back()->with('success', 'Medical Data inserted!');
        }
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
