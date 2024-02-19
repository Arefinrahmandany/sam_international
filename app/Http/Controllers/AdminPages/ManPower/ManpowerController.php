<?php

namespace App\Http\Controllers\AdminPages\ManPower;

use App\Models\BMET;
use App\Models\Rl_licence;
use App\Models\Transection;
use Illuminate\Http\Request;
use App\Models\Passports_new;
use App\Models\RejectedPassports;
use App\Http\Controllers\Controller;

class ManpowerController extends Controller
{
    public function index()
    {
        $passports = Passports_new::where('visa_Process', 'menPower')->get();

        $rlLicence = Rl_licence::latest()->get();
        return view('admin.adminPages.man_power.index',[
            'rlLicence' => $rlLicence,
            'passports' => $passports
        ]);
    }
    public function update(Request $request, string $id)
    {
        $update_data = Passports_new::findorfail($id);

        $passport_number = $update_data->passport_number;

        $rl_data = Rl_licence::where('rl_name', $request->rla_num)->first();

        $rlFees = $rl_data->rl_fee;
        $rlname = $rl_data->rl_name;

        // data store to table
        $update_data->update([
            'rla_num' => $request->rla_num,
            'manpower_submit_date' => $request->manpower_submit_date,
            'bmet_status' => $request->bmet_status,
            'rl_fee' => $rlFees,
        ]);

        Transection::create([
            'paid_to' => 'BMET ' . $rlname,
            'details' => 'Credit From Sonali Bank' . ' to ' . $rlname,
            'credit' => $rlFees,
        ]);

        BMET::create([
            'passportNumber' => $passport_number,
            'rlNumber' => $rlname,
            'debit' => $rlFees,
        ]);

        // redirect to the same page
        return back()->with('success', 'Data successfully Updated');
    }

    public function statusUpdate(Request $request,string $id)
    {
        $passport_data = Passports_new::where('passport_number',$id)->first();

        $rl_data = Rl_licence::where('rl_name', $passport_data->rla_num)->first();

        $rlFees = $rl_data->rl_fee;
        $rlname = $rl_data->rl_name;

        // data store to table
        $passport_data -> update([
            'bmet_status' => $request->bmet_status,
        ]);

        if($request->bmet_status == 'pass'){
            BMET::create([
                'passportNumber' => $id,
                'rlNumber' => $rlname,
                'credit' => $rlFees,
            ]);
        }else{
            BMET::create([
                'passportNumber' => $id,
                'rlNumber' => $rlname,
                'due' => $rlFees,
            ]);
        }
        //redirect to back same page
        return back() -> with('success','Data successfully Updated');
    }
    public function statusReject(Request $request,string $id)
    {
        $remove = Passports_new::find($id);

        $passport_number = $remove->passport_number;

        Transection::Create([
            'reciveFrom' => 'BMET ' . $remove->rla_num,
            'details' => 'Due under BMET for reject Pass' .' for '. $passport_number . ' to ' . $remove->rla_num,
            'due' => $remove->rl_fee,
        ]);

        RejectedPassports::Create([
            'passportNumber' => $passport_number,
            'agentsBD' => $remove->agentsBD,
            'amount' => $remove->amount,
            'rlNumber' => $remove->rla_num,
            'bmetSubmitionDate' => $remove->manpower_submit_date,
        ]);

        if ($remove) {
            $remove->update([
                'rla_num'  => null,
                'manpower_submit_date'  => null,
                'bmet_status'           => 'rejected',
            ]);
        }



        //redirect to back same page
        return back() -> with('success','Data successfully Updated');
    }

    public function rlcreate()
    {
        $rlLicence = Rl_licence::latest()->get();
        return view('admin.adminPages.man_power.rl_licence',[
            'rlLicence' => $rlLicence,
            'form_type' => 'create'
        ]);
    }


    public function rlstore(Request $request)
    {
        Rl_licence::create([
            'rl_name'   =>  $request->rl_name,
        ]);

        return back()->with('success','Data Insert Successfully');
    }


    public function rledit()
    {
        $rlLicence = Rl_licence::latest()->get();
        return view('admin.adminPages.man_power.index',[
            'rlLicence' => $rlLicence,
            'form_type' => 'edit'
        ]);
    }


    public function rlupdate()
    {
        $passports = Passports_new::where('visa_Process','menPower')->get();
        return view('admin.adminPages.man_power.index',[
            'passports' => $passports,
            'form_type' => 'create'
        ]);
    }


}
