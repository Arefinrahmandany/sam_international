<?php

namespace App\Http\Controllers\AdminPages;


use App\Models\Service;
use App\Models\AgentsBd;
use App\Models\countries;
use App\Models\Passports;
use App\Models\VisaOffice;
use App\Models\Transection;
use Illuminate\Http\Request;
use App\Models\Passports_new;
use App\Models\VisaSubmission;
use App\Models\AgentTransaction;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class PassportsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $passports = Passports::latest()->where('trash','0')->get();
        return view('admin.adminPages.passports.index',[
            'passports' => $passports
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $service = Service::all();
        $visaOffices = VisaOffice::latest()->get();
        $agents = AgentsBd::all();
        $countries_data = countries::all();
        return view('admin.adminPages.passports.form',[
            'agency' => $visaOffices,
            'all_countries' => $countries_data,
            'all_agents'    => $agents,
            'service'    => $service,
            'form_type'     => 'create'
        ]);
    }

    /**
     * Genarate a voucher number.
     */

    public function generateUniqueVoucherNo()
    {
        do {
            $voucherNo = random_int(1000, 99999);
        }while (Transection::where('voucherNo', $voucherNo)->exists());

        return $voucherNo;
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //validate
        $this-> validate($request,[
            'passport'=> 'required||unique:Passports,passport',
        ]);

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
        //Store ALl Requested data
        Passports::create([
            'passport'              => $request->passport,
            'name'                  => $request->name,
            'email'                 => $request->email,
            'passport_issue_date'   => $request->passport_issue_date,
            'passport_expire_date'  => $request->passport_expire_date,
            'father'                => $request->father,
            'mother'                => $request->mother,
            'service'               => $request->service,
            'agentsBD'              => $request->agentsBD,
            'applying_country'      => $request->applying_country,
            'address'               => $request->address,
            'gender'                => $request->gender,
            'religion'              => $request->religion,
            'cell'                  => $request->cell,
            'photos'                => json_encode( $paperImg ),
            'user_id'               => Auth::guard('admin')->user()->id,
        ]);

        //redirect to back same page
        return back()->with('success', 'Data successfully inserted .');

    }

    public function amount(Request $request,string $id)
    {
        $update_data = Passports::findorFail($id);

        $update_data->update([
            'amount' => $request->amount,
        ]);

        $voucherNo = $this->generateUniqueVoucherNo();
        AgentTransaction::create([
            'voucherNo'     => $voucherNo,
            'reciveBy'      => Auth::guard('admin')->user()->id,
            'agent'         => $update_data-> agentsBD,
            'detail'        => 'Due For '.$update_data-> passport_number . ", Agent - " . $update_data->agents->name .' Applying country - '. $update_data->applying_country,
            'debit'         => $request-> amount,
            'paymentSystem' => 'due',
        ]);

        return back()->with('success-table','Amount update successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $passports = Passports_new::findorfail($id);
        return view('admin.adminPages.passports.form',[
            'passports'     => $passports,
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
        $passport_number = $request->passport;
        $update_data = Passports_new::where('passport_number',$passport_number);

        // data store to table
        $update_data -> update([
            'passport_number'       => $request->passport_number,
            'passport_issue_date'   => $request->passport_issue_date,
            'passport_expire_date'   => $request->passport_expire_date,
            'visa_process'           => $request->visa_process,
            'name'                  => $request->name,
            'phone'                 => $request->phone,
            'birthdate'             => $request->birthdate,
            'address'               => $request->address,
            'email'                 => $request->email,
            'religion'              => $request->religion,
            'okala'                 => $request->okala,
            'first_Party'           => $request->first_Party,
            'nationality'           => $request->nationality,
            'age'                   => $request->age,
            'sex'                   => $request->sex,
            'occupation'            => $request->occupation,
            'incharge_number'       => $request->incharge_number,
            'visa_number'           => $request->visa_number,
            'applying_country'      => $request->applying_country,
            'supports'              => $request->supports,
            'agentsBD'              => $request->agentsBD,
            'licence'               => $request->licence,
            'qualification'         => $request->qualification,
            'police_clearance'      => $request->police_clearance,
            'finger'                => $request->finger,
            'training'              => $request->training,
            'attested'              => $request->attested,
            'medical_report'        => $request->medical_report,
        ]);

        return redirect()->route('passports.index')->with('success','Data successfully update');

    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $delete_data = Passports::findorfail($id);
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
