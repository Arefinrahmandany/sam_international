<?php

namespace App\Http\Controllers\AdminPages;

use App\Models\countries;
use App\Models\VisaOffice;
use Illuminate\Http\Request;
use App\Models\VisaSubmission;
use App\Models\Passports_new;
use App\Http\Controllers\Controller;

class VisaSubmissionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $passports_data = Passports_new::latest()->where('tresh','0')->get();
        return view('admin.adminPages.visa_submission.index',[
        'passports_data' => $passports_data,
        'form_type'         => 'index'
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
       //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // data store to table
        VisaSubmission::create([
            'passport_number'       => $request -> passportNumber,
            'applyingcountry'       => $request -> applyingcountry,
            'agency'                => $request -> agencies,
            'visa_application_date' => $request -> visa_application_date,
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
        $VisaSubmission = VisaSubmission::latest()->get();
        $all_countries = countries::all();
        $all_visaOffice = VisaOffice::all();
        $VisaSubmission_data = VisaSubmission::findorfail($id);
        return view('admin.adminPages.visa_submission.index',[
        'VisaSubmission' => $VisaSubmission,
        'all_visaOffice' => $all_visaOffice,
        'VisaSubmission_data' => $VisaSubmission_data,
        'all_countries' => $all_countries,
        'form_type' => 'edit'
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $update_data = Passports_new::findorfail($id);

        // data update to table
        $update_data -> update([
            'visa_application_date'  => $request -> visa_application_date,
            'visa_issue_date'       => $request -> visa_issue_date,
            'visa_expiry_date'      => $request -> visa_expiry_date,
        ]);

        //redirect to back same page
        return back() -> with('success','Data successfully Updated');
    }


    /**
     * Tresh Update
     */

    public function updateTresh($id)
    {

        $data =  VisaSubmission::findorFail($id);

        if($data -> tresh){
            $data -> update([
                'tresh'=>false
            ]);
        }else{
            $data -> update([
                'tresh'=>true
            ]);
        }

        return back()->with('denger-table','Data Deleted successfull');

    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
