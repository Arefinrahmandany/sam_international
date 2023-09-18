<?php

namespace App\Http\Controllers;

use App\Models\countries;
use Illuminate\Http\Request;
use App\Models\VisaSubmission;
use App\Models\VisaApplicationOffice;

class VisasubmissionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = VisaSubmission::all();
        return view('backend.visasubmission.visasubmission',[
            'all_data' => $data
        ]);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $countries_data = countries::all();
        $visaOffices = VisaApplicationOffice::all();
        return view('backend.visasubmission.visasubmissionCreate',[
            'all_countries' => $countries_data,
            'all_visaOffices' => $visaOffices
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        // data store to table
        VisaSubmission::create([
            'passport_number'   => $request -> passportnumber,
            'applyingcountry'   => $request -> applyingcountry,
            'agency'            => $request -> agencies,
            'application_date'  => $request -> applyingdate,
        ]);
        //redirect to back same page
        return back() -> with('success','Data successfully inserted');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return view('backend.visasubmission.visasubmission-SingleView');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //call data by id
        $update_data = VisaSubmission::findorfail($id);

        // data store to table

        $update_data -> update([
            'passport_number'   => $request -> passportnumber,
            'applyingcountry'   => $request -> applyingcountry,
            'agency'            => $request -> agencies,
            'application_date'  => $request -> applyingdate,
        ]);

        return back() -> with('success','Data successfully update');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $delete_data = VisaSubmission::findorfail($id);
        $delete_data -> delete();
        return back() -> with('success','Data successfully inserted');
    }
}
