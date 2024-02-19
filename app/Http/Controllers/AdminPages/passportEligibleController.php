<?php

namespace App\Http\Controllers\AdminPages;

use Illuminate\Http\Request;
use App\Models\PassportEligible;
use App\Http\Controllers\Controller;

class passportEligibleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $passportEligible = PassportEligible::latest()->get();
        return view('admin.adminPages.passportEligibleStatus.index',[
            'passportEligible' => $passportEligible
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

        PassportEligible::create([
            'passport_number'   => $request -> passport_number,
            'applying_country'  => $request -> applying_country,
            'finger'            => $request -> training,
            'training'          => $request -> training,
            'attested'          => $request -> attested,
        ]);
        return back()->with('success','Data successfully Added');

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
