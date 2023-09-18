<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\VisaApplicationOffice;

class VisaagencyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $visaOffice = VisaApplicationOffice::all();
        return view('backend.visaoffice.visaoffice',[
            'visaOffice_data' => $visaOffice
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.visaoffice.visaoffice-New');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //validate
        $this-> validate($request,[
            'name' => 'required',
            'phone' => 'required',
            'email' => 'email',
        ]);
        VisaApplicationOffice::create([
            'name' => $request -> name,
            'phone' => $request -> phone,
            'email' => $request -> email,
            'address' => $request -> address,
        ]);
        //redirect to back same page
        return back() -> with('success','Data successfully inserted');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        return view('backend.visaoffice.visaofficeSingleView');
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
        $update_data = VisaApplicationOffice::findorfail($id);

        // data store to table

        $update_data -> update([
            'name' => $request -> name,
            'phone' => $request -> phone,
            'email' => $request -> email,
            'address' => $request -> address,
        ]);

        return back() -> with('success','Data successfully update');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $delete_data = VisaApplicationOffice::findorfail($id);
        $delete_data -> delete();
        return back() -> with('success','Data successfully inserted');
    }
}
