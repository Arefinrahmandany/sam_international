<?php

namespace App\Http\Controllers;

use App\Models\Medical;
use Illuminate\Http\Request;

class Medical_applicationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Medical::all();
        return view('backend.page.medical.index',[
            'all_data' => $data
        ]);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.medical.createMedicalInfo');
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
        return back() -> with('success','Data successfully inserted');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return view('backend.medical.medical-SingleView');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('backend.medical.medical-Editform');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $update_data = Medical::findorfail($id);

        // data store to table

        $update_data -> update([
            'passport_number' => $request -> passportNumber,
            'medical_date' => $request -> medicalDate,
            'medicalStatus' => $request -> medicalstatus,
            'expiryDate' => $request -> expiryDate,
        ]);

        return back() -> with('success','Data successfully update');
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
