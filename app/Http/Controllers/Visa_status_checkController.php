<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\VisaApplicationStatus;

class Visa_status_checkController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = VisaApplicationStatus::all();
        return view('backend.status.status',[
        'all_data' => $data
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.status.statusNew');
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

        VisaApplicationStatus::create([
            'passport_number' => $request -> passportNumber,
            'visa_status' => $request -> visaStatus,
            'issueDate' => $request -> issueDate,
            'expiryDate' => $request -> expiryDate,
        ]);

        //redirect to back same page

        return back() -> with('success','Data successfully inserted');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return view('backend.status.status-SingleView');
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
        return view('backend.status.status-EditForm');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
