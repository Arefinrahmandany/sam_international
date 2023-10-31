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
        return view('backend.page.visaoffice.index',[
            'visaOffice_data'   =>  $visaOffice,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $visaOffice = VisaApplicationOffice::all();
        return view('backend.page.visaoffice.visaoffice',[
            'visaOffice_data'   =>  $visaOffice,
            'form_type'         =>  'create'

            ]);
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
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $visaOffice = VisaApplicationOffice::all();
        $edit_data = VisaApplicationOffice::findorfail($id);
        return view('backend.page.visaoffice.visaoffice',[
            'visaOffice_data'   =>  $visaOffice,
            'edit'              =>  $edit_data,
            'form_type'         =>  'edit'
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $update_data = VisaApplicationOffice::findorfail($id);

        // data store to table

        $update_data -> update([
            'name'      => $request -> name,
            'phone'     => $request -> phone,
            'email'     => $request -> email,
            'address'   => $request -> address,
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
