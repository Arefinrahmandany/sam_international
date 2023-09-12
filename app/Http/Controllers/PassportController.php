<?php

namespace App\Http\Controllers;

use App\Models\NewPassport;
use Illuminate\Http\Request;

use function Termwind\render;

class PassportController extends Controller
{

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('backend.passports.passports');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.passports.passportCreate');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        if( $request -> hasFile('photo')){
            $img = $request -> file('photo');
            $file_name = md5(time().rand()) . '. ' .  $img -> clientExtension();
            $img -> move(public_path('photos'), $file_name);
        }else{
            $file_name = NULL;
        }

        NewPassport::create([
            'passport_number' => $request -> passpoertNumber,
            'name' => $request -> name,
            'email' => $request -> email,
            'phone' => $request -> phone,
            'address' => $request -> address,
            'applying_country' => $request -> applying_country,
            'agent_via' => $request -> agents,
            'amount' => $request -> payment,
            'photos' => $file_name,
        ]);
    return back();


    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        return view('backend.passports.passportSingleView');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        return view('backend.passports.passportEditForm');
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
