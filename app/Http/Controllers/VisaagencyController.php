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
        return view('backend.visaoffice.visaoffice');
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
        VisaApplicationOffice::create([
            'name' => $request -> name,
            'phone' => $request -> phone,
            'email' => $request -> email,
            'nid' => $request -> nid,
            'address' => $request -> address,
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        return view('backend.visaoffice.visaoffice-SingleView');
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
        return view('backend.visaoffice.visaofficeEditForm');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
