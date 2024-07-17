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
    public function index(Request $request)
    {

        $startDate = $request->startDate;
        $endDate = $request->endDate;
        $searchCountry = $request->country;
        $searchAgent = $request->agents;
        $searchType = $request->service;

        $service = Service::all();
        $country = countries::all();
        $agents = AgentsBd::all();
        $passports = Passports::latest()->where('trash','0')->where('status','1');

        if (!empty($startDate) && !empty($endDate)) {
            $passports->whereBetween('created_at', [$startDate, $endDate]);
        }
        if (!empty($searchCountry)) {
            $passports->where('applying_country', $searchCountry);
        }
        if (!empty($searchAgent)) {
            $passports->where('agentsBD', $searchAgent);
        }
        if (!empty($searchType)) {
            $passports->where('service', $searchType);
        }
        $passports = $passports->get();

        return view('admin.adminPages.passports.index', [
            'passports' => $passports,
            'service' => $service,
            'country' => $country,
            'agents' => $agents,
            'startDate' => $startDate,
            'endDate' => $endDate,
            'searchCountry' => $searchCountry,
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
            'passport'=> 'required|unique:passports,passport',
        ]);

        //multiple image upload
        $paperImg = [];
        if( $request -> hasFile('gallery')){
            $gallery = $request -> file('gallery');
            foreach ($gallery as $key) {
                $file_name = md5(time().rand()) . '.'. $key -> clientExtension();
                $key -> move(storage_path('app/public/passports/'), $file_name);
                array_push($paperImg , $file_name);
            }
        }
        //Store ALl Requested data
        Passports::create([
            'name'                  => $request->name,
            'passport'              => $request->passport,
            'passport_issue_date'   => $request->passport_issue_date,
            'passport_expire_date'  => $request->passport_expire_date,
            'father'                => $request->fatherName,
            'mother'                => $request->motherName,
            'nid'                   => $request->nid,
            'dob'                  => $request->dob,
            'pob'                  => $request->pob,
            'gender'                => $request->gender,
            'religion'              => $request->religion,
            'cell'                  => $request->cell,
            'service'               => $request->service,
            'agentsBD'              => $request->agentsBD,
            'applying_country'      => $request->applying_country,
            'work_type'             => $request->work_type,
            'attested'              => $request->attested,
            'visaExp'               => $request->visaExp,
            'photos'                => json_encode( $paperImg ),
            'user_id'               => Auth::guard('admin')->user()->id,
        ]);

        //redirect to back same page
        return back()->with('success', 'Data successfully inserted .');
    }

    public function amountPage()
    {
        $passports = Passports::latest()->where('trash', 0)->where('status',1)->get();
        $passportList = Passports::latest()->where('trash', 0)->where('status',1)->where('amount',null)->get();
        return view('admin.adminPages.passports.passportsRate',[
            'passports' => $passports,
            'passportList' => $passportList
        ]);
    }

    public function amount(Request $request)
    {
        $passportNumber = $request->passport;

        // Retrieve the model instance
        $update_data = Passports::where('passport', $passportNumber)->first();

        // Check if the model exists
        if ($update_data) {
            $update_data->update([
                'amount' => $request->amount,
            ]);

            $agent = $update_data->agentsBD;
            $service = $update_data->service;
            if($update_data->service){
                $services = Service::where('id',$service)->first();
                $service = $services->service;
            }

            $voucherNo = $this->generateUniqueVoucherNo();
            AgentTransaction::create([
                'voucherNo'     => $voucherNo,
                'reciveBy'      => Auth::guard('admin')->user()->id,
                'agent'         => $agent,
                'detail'        => strtoupper('Due For '.$passportNumber . ", Agent - " . $update_data->agent->name .' for '.$service.' In - '. $update_data->applying_country ),
                'debit'         => $request->amount,
                'paymentSystem' => 'due',
            ]);

            return back()->with('success-table','Amount update successfully');
        } else {
            // Handle the case where the model is not found
            return back()->with('error', 'Passport not found');
        }
    }


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $passports = Passports::findorfail($id);
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

        $service = Service::all();
        $visaOffices = VisaOffice::latest()->get();
        $agents = AgentsBd::all();
        $countries_data = countries::all();
        $passport_data = Passports::with(['agent','servic'])->findorFail($id);


        return view('admin.adminPages.passports.form',[

            'agency' => $visaOffices,
            'service'    => $service,
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


        $update_data = Passports::findorFail($id);
        // data store to table
        $update_data -> update([
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
            'dob'                  => $request->dob,
            'age'                  => $request->age,
        ]);
        return redirect()->route('passports.index')->with('success','Data successfully update');
    }

    /**
     * Tresh Update
     */
    public function trash($id)
    {
        $data =  Passports::findorFail($id);
        if($data -> trash){
            $data -> update([
                'trash'     =>false,
                'trash_by'   => Auth::guard('admin')->user()->id,
            ]);
        }else{
            $data -> update([
                'trash'     =>true,
                'trash_by'   => Auth::guard('admin')->user()->id,
            ]);
        }
        return back()->with('success-table','Data Deleted successfull');
    }

    /**
     * Trash Storage Place
     */
    public function recycle()
    {
        $trashPassports=Passports::latest()->where('trash', 1)->get();
        return view('admin.adminPages.passports.passportRecycle',[
            'trashPassports' => $trashPassports ,
        ]);
    }

    /**
     * Tresh Data Restore
     */
    public function restore($id)
    {
        $data =  Passports::findorFail($id);

        if($data -> trash){
            $data -> update([
                'trash'=>false,
            ]);
        }else{
            $data -> update([
                'trash'=>true,
            ]);
        }
        return back()->with('success-table','Data Restore successfull');
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

}
