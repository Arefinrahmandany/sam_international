<?php

namespace App\Http\Controllers\AdminPages;

use Illuminate\Http\Request;
use App\Models\VisaStatusCheck;
use App\Http\Controllers\Controller;

class VisaStatusCheckController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $visaStatusCheck = VisaStatusCheck::latest()->get();
        return view('admin.adminPages.VisaStatusCheck.index',[
            'visaStatusCheck' => $visaStatusCheck
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $visaStatusCheck = VisaStatusCheck::latest()->get();
        return view('admin.adminPages.VisaStatusCheck.form',[
            'visaStatusCheck' => $visaStatusCheck,
            'form_type'=>'create'
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
        //
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
