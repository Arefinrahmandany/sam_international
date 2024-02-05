<?php

namespace App\Http\Controllers\AdminPages;

use App\Http\Controllers\Controller;
use App\Models\Medical;
use Illuminate\Http\Request;

class MedicalController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $medical = Medical::latest()->get();
        return view('admin.adminPages.medical.index',[
            'medical' => $medical
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.adminPages.medical.form',[
            'form_type' => 'create'
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        //validate
        $this-> validate($request,[
            'passportNumber' => 'required',
        ]);


        // data store to table
        Medical::create([
            'passport_number'   => $request -> passportNumber,
            'medical_date'      => $request -> medicalDate,
            'medicalStatus'     => $request -> medicalstatus,
            'expiryDate'        => $request -> expiryDate,
        ]);

        //redirect to back same page
        return redirect()->route('Medical.index')->with('success','Data successfully update');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $medical = Medical::findorfail($id);
        return view('admin.adminPages.medical.form',[
            'medical' => $medical,
            'form_type' => 'edit'
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $update_data = Medical::findorfail($id);

        // data store to table
        $update_data -> update([
            'passport_number'   => $request -> passportNumber,
            'medical_date'      => $request -> medicalDate,
            'medicalStatus'     => $request -> medicalstatus,
            'expiryDate'        => $request -> expiryDate,
        ]);
    }

    /**
     * Tresh Update
     */

    public function updateTresh($id)
    {

            $data =  Medical::findorFail($id);

            if($data -> tresh){
                $data -> update([
                    'tresh'=>false
                ]);
            }else{
                $data -> update([
                    'tresh'=>true
                ]);
            }

            return back()->with('success-table','Data Deleted successfull');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $delete_data = Medical::findorfail($id);
        $delete_data -> delete();
        return back() -> with('success','Data successfully inserted');
    }


}
