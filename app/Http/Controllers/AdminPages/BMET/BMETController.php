<?php

namespace App\Http\Controllers\AdminPages\BMET;

use App\Models\BMET;
use App\Models\Rl_licence;
use App\Models\Transection;
use Illuminate\Http\Request;
use App\Models\Passports_new;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class BMETController extends Controller
{
    public function index()
    {
        $bmet = BMET::all();

        $balances = [];

        foreach ($bmet as $bmet) {
            $bmet_name = $bmet->rlNumber;

            $bmet_balance = BMET::where('rlNumber', 'LIKE', '%' . $bmet_name . '%')->get();

            $total_debit = $bmet_balance->sum('debit');
            $total_credit = $bmet_balance->sum('credit');
            $balance = $total_debit - $total_credit;

            // Store the balance for the current bank
            $balances[$bmet->rlNumber] = $balance;
        }

        // Fetch the count of entries for each unique license number
            $licenseCounts = Passports_new::groupBy('rla_num')
            ->select('rla_num', DB::raw('count(*) as count'))
            ->get();

        // Fetch all license data
        $rlLicences = Rl_licence::all();

        // Create an array to store counts for each license number
        $licenseCountsArray = [];

        // Iterate through each license and get the count
        foreach ($rlLicences as $rlLicence) {
            $count = Passports_new::where('rla_num', $rlLicence->rl_name)->count();
            $licenseCountsArray[$rlLicence->rl_name] = $count;
        }

        // Retrieve all Rl_licence data
        $rl_data = Rl_licence::latest()->get();

        return view('admin.adminPages.BMET.index', [
            'rlLicences' => $rlLicences,
            'rl_data' => $rl_data,
            'licenseCountsArray' => $licenseCountsArray,
            'balance' => $balances,
            'form_type' => 'create'
        ]);
    }

    public function store(Request $request)
    {
        Rl_licence::create([
            'rl_name'   =>  $request->rl_name,
            'rl_fee'   =>  $request->rl_fee,
        ]);

        return back()->with('success','Data Insert Successfully');
    }

    public function show(string $id)
    {
        $rlLicence = Rl_licence::find($id);

        // Retrieve rl_name attribute
        $rlName = $rlLicence->rl_name;

        $rlNum = BMET::where('rlNumber',$rlName)->get();

        // Initialize balance
        $rlBalance = 0;

        // Calculate balance for each item in $rlDatas
        foreach ($rlNum as $rlData) {
            $rlBalance += $rlData->debit + $rlData->due - $rlData->credit ;
        }

        return view('admin.adminPages.BMET.show',[
            'rlLicence' => $rlLicence,
            'rlHistory' => $rlNum,
            'rlBalance' => $rlBalance,
        ]);
    }

    public function edit(string $id)
    {
        // Fetch the count of entries for each unique license number
        $licenseCounts = Passports_new::groupBy('rla_num')
        ->select('rla_num', DB::raw('count(*) as count'))
        ->get();

    // Fetch all license data
    $rlLicences = Rl_licence::all();

    // Create an array to store counts for each license number
    $licenseCountsArray = [];

    // Iterate through each license and get the count
    foreach ($rlLicences as $rlLicence) {
        $count = Passports_new::where('rla_num', $rlLicence->rl_name)->count();
        $licenseCountsArray[$rlLicence->rl_name] = $count;
    }

    // Retrieve all Rl_licence data
    $rl_data = Rl_licence::latest()->get();

        $edit = Rl_licence::findorfail($id);
        return view('admin.adminPages.BMET.index',[
            'rlLicences' => $rlLicences,
            'rl_data' => $rl_data,
            'licenseCountsArray' => $licenseCountsArray,
            'edit' =>$edit,
            'form_type'=>'edit'
        ]);
    }

    public function update(Request $request, string $id)
    {
        $update_data = Rl_licence::findorfail($id);
        $update_data -> update([
            'rl_name'   =>  $request->rl_name,
            'rl_fee'   =>  $request->rl_fee,
        ]);

        return redirect()->route('bmet.index')->with('success-table','Data Update Successfully');
    }

    public function trash(string $id)
    {
        //
    }

    public function passportRejected()
    {
        $rejectedPassports = Passports_new::where('bmet_status','rejected')->get();
        return view('admin.adminPages.delivery.reject_passport',[
            'rejectedPassports' => $rejectedPassports
        ]);
    }

    public function passportReturn(string $id)
    {
        $returnPassport = Passports_new::findorfail($id);

        $returnPassport->update([
            'rla_num' => null,
            'bmet_status' =>null,
            'manpower_submit_date' => null,
            'amount' => null,
            'rl_fee' => null,
            'finger' => 0,
            'training' => 0,
            'paymentSystem' => null,
            'visa_process' => null,
        ]);

        return back();
    }

}
