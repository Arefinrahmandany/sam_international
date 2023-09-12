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
        return view('backend.status.status');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.status.status-new');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        VisaApplicationStatus::create([
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
