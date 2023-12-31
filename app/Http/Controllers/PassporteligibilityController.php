<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ApplicantEligibility;

class PassporteligibilityController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = ApplicantEligibility::all();
        return view('backend.page.eligibility.index',[
        'all_data' => $data
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.eligibility.createEligibilityInfo');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        ApplicantEligibility::create([
            'passport_number' => $request -> passportNumber,
            'finger' => $request -> finger,
            'training' => $request -> training,
            'attested' => $request -> attested,
        ]);
        return back();
    }

    /**
     * Display the specified resource.
     */
    public function show($id){
        return view('backend.eligibility.eligibility-SingleView');
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
    public function update($id)
    {

        $update_data = ApplicantEligibility::findorfail($id);

        // data store to table

        $update_data -> update([
            'passport_number' => $request -> passportNumber,
            'finger' => $request -> finger,
            'training' => $request -> training,
            'attested' => $request -> attested,
        ]);

        return back() -> with('success','Data successfully update');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $delete_data = ApplicantEligibility::findorfail($id);
        $delete_data -> delete();
        return back() -> with('success','Data successfully inserted');
    }
}
