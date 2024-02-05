<?php

namespace App\Http\Controllers\AdminPages;

use App\Models\VisaOffice;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class VisaOfficeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $visaOffice = VisaOffice::all();
        return view('admin.adminPages.visaAgency.index',[
            'visaOffice' => $visaOffice,
            'form_type' => 'create'
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
        VisaOffice::create([
            'name'      => $request -> name,
            'phone'     => $request -> cell,
            'email'     => $request -> email,
            'address'   => $request -> address,
        ]);

        //redirect to back same page
        return back()->with('success','Data Insert Successfully');
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
        $visaOffice = VisaOffice::findorfail($id);
        return view('admin.adminPages.visaAgency.index',[
            'visaOffice' => $visaOffice,
            'form_type' => 'edit'
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $update_data = VisaOffice::findorfail($id);

        // data store to table
        $update_data -> update([

            'name'      => $request -> name,
            'phone'     => $request -> cell,
            'email'     => $request -> email,
            'address'   => $request -> address,
        ]);

        return redirect()->route('visaoffice.index')->with('success-table', 'Data successfully inserted .');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $delete_data = VisaOffice::findorfail($id);
        $delete_data -> delete();
        return back() -> with('success','Data successfully inserted');
    }
}
