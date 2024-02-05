<?php

namespace App\Http\Controllers\AdminPages;

use App\Models\AgentsBd;
use App\Models\Passports_new;
use App\Models\countries;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PassportsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $passports = Passports_new::latest()->get();
        return view('admin.adminPages.passports.index',[
            'passports' => $passports
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $agents = AgentsBd::all();
        $countries_data = countries::all();
        return view('admin.adminPages.passports.form',[
            'all_countries' => $countries_data,
            'all_agents'    => $agents,
            'form_type'     => 'create'
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {



         //multiple image upload

    $paperImg = [];

    if( $request -> hasFile('gallery')){

$gallery = $request -> file('gallery');

foreach ($gallery as $key) {

    $file_name = md5(time().rand()) . '.'. $key -> clientExtension();

    $key -> move(public_path('photos/passportsPaper/'), $file_name);

    array_push($paperImg , $file_name);

}

    }

        Passports_new::create([
            'passport_number'       => $request->passpoertNumber,
            'name'                  => $request->name,
            'email'                 => $request->email,
            'phone'                 => $request->phone,
            'address'               => $request->address,
            'applying_country'      => $request->applying_country,
            'agent_via'             => $request->agents,
            'incharge_number'       => $request->incharge_number,
            'visa_number'           => $request->visa_number,
            'passport_issue_date'   => $request->passport_issue_date,
            'age'                   => $request->age,
            'sex'                   => $request->sex,
            'supports'              => $request->supports,
            'agency'                => $request->agency,
            'medical_report'        => $request->medical_report,
            'police_clearance'      => $request->police_clearance,
            'licence'               => $request->licence,
            'occupation'            => $request->occupation,
            'qualification'         => $request->qualification,
            'religion'              => $request->religion,
            'visaProcess'           => $request->visaProcess,
            'finger'                => $request->finger,
            'training'              => $request->training,
            'attested'              => $request->attested,
            'paymentSystem'         => $request->paymentSystem,
            'amount'                => $request->payment,
            'photos'                => json_encode( $paperImg ),
        ]);

    //redirect to back same page
    return redirect()->route('passports.index')->with('success-table', 'Data successfully inserted .');



    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $agents = AgentsBd::all();
        $countries_data = countries::all();
        $passports = Passports_new::findorfail($id);
        return view('admin.adminPages.passports.form',[
            'passports'     => $passports,
            'all_countries' => $countries_data,
            'all_agents'    => $agents,
            'form_type'     => 'show'
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $agents = AgentsBd::all();
        $countries_data = countries::all();
        $passport_data = Passports_new::findorFail($id);
        return view('admin.adminPages.passports.form',[
            'all_agents'    => $agents,
            'all_countries' => $countries_data,
            'edit' => $passport_data,
            'form_type'     => 'edit'
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $update_data = Passports_new::findorfail($id);

        // data store to table
        $update_data -> update([

            'passport_number'       => $request->passpoertNumber,
            'name'                  => $request->name,
            'email'                 => $request->email,
            'phone'                 => $request->phone,
            'address'               => $request->address,
            'applying_country'      => $request->applying_country,
            'agent_via'             => $request->agents,
            'incharge_number'       => $request->incharge_number,
            'visa_number'           => $request->visa_number,
            'passport_issue_date'   => $request->passport_issue_date,
            'age'                   => $request->age,
            'sex'                   => $request->sex,
            'supports'              => $request->supports,
            'agency'                => $request->agency,
            'medical_report'        => $request->medical_report,
            'police_clearance'      => $request->police_clearance,
            'licence'               => $request->licence,
            'occupation'            => $request->occupation,
            'qualification'         => $request->qualification,
            'religion'              => $request->religion,
            'visaProcess'           => $request->visaProcess,
            'finger'                => $request->finger,
            'training'              => $request->training,
            'attested'              => $request->attested,
            'paymentSystem'         => $request->paymentSystem,
            'amount'                => $request->payment,

        ]);

        return redirect()->route('passports.index')->with('success','Data successfully update');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $delete_data = Passports_new::findorfail($id);
        $delete_data -> delete();
        return back() -> with('success','Data successfully inserted');
    }




    /**
     * Tresh Update
     */

    public function updateTresh($id)
    {

        $data =  Passports_new::findorFail($id);

        if($data -> tresh){
            $data -> update([
                'tresh'=>false
            ]);
        }else{
            $data -> update([
                'tresh'=>true
            ]);
        }

        return back()->with('success-table','Data Deleted successfull');

    }





}
