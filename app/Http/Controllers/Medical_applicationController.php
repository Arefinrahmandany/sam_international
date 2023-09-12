<?php

namespace App\Http\Controllers;

use App\Models\Medical;
use Illuminate\Http\Request;

class Medical_applicationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('backend.medical.medical');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.medical.createMedicalInfo');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Medical::create([
            'passport_number' => $request -> passportNumber,
            'medical_date' => $request -> medicalDate,
            'medicalStatus' => $request -> medicalstatus,
            'expiryDate' => $request -> expiryDate,
        ]);
        return back();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return view('backend.medical.medical-SingleView');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('backend.medical.medical-Editform');
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
