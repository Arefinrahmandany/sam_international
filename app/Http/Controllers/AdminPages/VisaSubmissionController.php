<?php

namespace App\Http\Controllers\AdminPages;

use App\Models\VisaSubmission;
use App\Models\countries;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class VisaSubmissionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $VisaSubmission = VisaSubmission::latest()->get();
        return view('admin.adminPages.visa_submission.index',[
        'VisaSubmission' => $VisaSubmission
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $all_countries = countries::all();
        $VisaSubmission = VisaSubmission::latest()->get();
        return view('admin.adminPages.visa_submission.form',[
        'VisaSubmission' => $VisaSubmission,
        'all_countries' => $all_countries,
        'form_type' => 'create'
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // data store to table
        VisaSubmission::create([
            'passport_number'   => $request -> passportNumber,
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
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $all_countries = countries::all();
        $VisaSubmission = VisaSubmission::findorfail($id);
        return view('admin.adminPages.visa_submission.form',[
        'VisaSubmission' => $VisaSubmission,
        'all_countries' => $all_countries,
        'form_type' => 'edit'
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
