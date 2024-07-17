<?php

namespace App\Http\Controllers\AdminPages;

use Carbon\Carbon;
use App\Models\Bank;
use App\Models\AgentsBd;
use App\Models\Transection;
use Illuminate\Http\Request;
use App\Models\BankTransaction;
use App\Models\TransactionType;
use App\Models\AgentTransaction;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class TransectionController extends Controller
{
    /**
     * Genarate a voucher number.
     */

    public function generateUniqueVoucherNo()
    {
         // Get the last voucher number from the database
        $lastVoucher = Transection::orderBy('voucherNo', 'desc')->first();

         // If no previous voucher exists, start with a default value
        $lastVoucherNo = $lastVoucher ? $lastVoucher->voucherNo : 0;

         // Increment the last voucher number
        $voucherNo = $lastVoucherNo + 1;

        // Ensure the generated voucher number is unique
        while (Transection::where('voucherNo', $voucherNo)->exists()) {
            $voucherNo++;
        }

        return $voucherNo;
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $transection = Transection::where('tresh','0')
            ->latest()
            ->get();
        $agentsBd = AgentsBd::latest()->get();
        return view('admin.adminPages.accounting.index',[
            'agentsBd'      => $agentsBd,
            'transection'   => $transection
        ]);
    }

    /**
     * Display a listing of the resource.
     */
    public function pettyCash()
    {
        $voucherNo = $this->generateUniqueVoucherNo();// Generates a unique random number between 1000 and 9999
        $today = Carbon::today();

        $bank = Bank::all();
        $transactionTypes = TransactionType::all();
        $agentsBd = AgentsBd::where('trash',0)->where('status',1)->latest()->get();
        return view('admin.adminPages.accounting.pettyCash',[
            'agentsBd' => $agentsBd,
            'bank' => $bank,
            'voucherNo' => $voucherNo,
            'transactionTypes' => $transactionTypes,
            'today'=>$today
        ]);
    }
    /**
     * Display a listing of the resource.
     */
    public function dailyStatement(Request $request)
    {
         $today = Carbon::today();

    if (!empty($request->date)) {
        $requestDate = Carbon::parse($request->date);
    } else {
        $requestDate = $today;
    }

    // Format $requestDate to 'Y-m-d' if needed
    $requestDate = $requestDate->format('Y-m-d');

        // Get the balance carried forward (B/D) from the previous day
        $previousDay = Carbon::parse($today)->subDay();

        // Get the total of Previous Days Sum of Debit
        $previousDayDebit = Transection::whereDate('created_at','<', $requestDate)
            ->where('tresh', false)
            ->where('status', true)
            ->sum('debit');

            // Get the total of Previous Days Sum of Crdeit
        $previousDayCredit = Transection::whereDate('created_at','<', $requestDate)
            ->where('tresh', false)
            ->where('status', true)
            ->sum('credit');
        // Get the balance carried forward (B/D) from the previous day
        $previousDayBalance = $previousDayDebit - $previousDayCredit ;

        // Day Transactions where 'created_at' is >= start of day and 'tresh' is 0
        $dayTransaction = Transection::whereDate('created_at', $requestDate)
                ->where('tresh', false)
                ->where('status', true)
                ->get();

        // Total Debit and Credit where 'tresh' is 0

         $totalDebit = $dayTransaction->sum('debit');
        $totalCredit = $dayTransaction->sum('credit');

        $dayBalance = $totalDebit - $totalCredit;

        $balance_cd = $previousDayBalance + $dayBalance ;
        $totalDebit = $dayTransaction->sum('debit') + $previousDayBalance ;
        $dayBalance = $totalDebit - $totalCredit;

        return view('admin.adminPages.accounting.daily_ending', [
            'balance_bd'        => $previousDayBalance,
            'dayTransaction'    => $dayTransaction,
            'totalDebit'        => $totalDebit,
            'totalCredit'       => $totalCredit,
            'dayBalance'        => $dayBalance,
            'balance_cd'        => $balance_cd,
            'requestDate'       => $requestDate
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $user_id = Auth::guard('admin')->user()->id;
        $debitCredit = null;
        $transection_details = null;

        if (empty($request->payment) && $request->paymentSystem != 'due') {
            // If $request->paid_to is empty and paymentSystem is not due, store amount in debit
            $debitCredit = ['debit' => $request->amount];
        } elseif (!empty($request->payment)) {
            // If $request->paid_to is not empty, store amount in credit
            $debitCredit = ['credit' => $request->amount];
        } else {
            // If none of the above conditions are met, store amount in due
            $debitCredit = ['due' => $request->amount];
        }

        // Get agents Name
        if(!empty($request->agentsBd) && empty($request->reciveFrom) ){
            $agentId = $request->agentsBd;
            $agent_data = AgentsBd::where('id',$agentId)->first();
            $agentName = $agent_data->name;
        }else{
            $reciveFrom = $request->reciveFrom;
        }



        // Determine $bankingName
        $bankingName = ($request->paymentSystem == 'banking' || $request->paymentSystem == 'check') ? $request->bankingDetail : '';

        if(!empty($request->reciveFrom) && empty($request->agentsBd) && empty($request->payment)){
            $transection_details = ['details' => strtoupper('Receive From ' . $reciveFrom.' '.$request->detail.' '.$bankingName)];
        }elseif(empty($request->reciveFrom) && !empty($request->agentsBd) && empty($request->payment)){
            $transection_details = ['details' => strtoupper('Receive From '. $agentName.' '.$request->detail.' '.$bankingName)];
        }else{
            $transection_details = ['details' => strtoupper($request->payment.' for '.$request->detail.' '.$bankingName)];
        }

        if(!empty($request->agentsBd) && $request->agentsBd !== 'new' ){
            $voucherNo = $this->generateUniqueVoucherNo();
            AgentTransaction::create([
                'voucherNo'     => $voucherNo,
                'reciveBy'      => $user_id,
                'agent'         => (int)$request->agentsBd,
                'detail'        => strtoupper('Receive from '.$agentName .' '.$request->detail.' '.$bankingName),
                'credit'        => $request->amount,
                'paymentSystem' => $request->paymentSystem,
            ]);
        }

        // Create Transection
        $data = Transection::create([
            'voucherNo'     => $request->voucherNo,
            'reciveBy'      => $user_id,
            'reciveFrom'    => $request->reciveFrom,
            'agent'         => $request->agentsBd,
            'paid_to'       => $request->payment,
            'type'          => $request->transactionTypes,
            'paymentSystem' => $request->paymentSystem,
            'user_id' => $user_id,
        ] + $transection_details + $debitCredit);

        $type = TransactionType::where('type', $request->transactionTypes)->first();
        if( empty($type) ){
            TransactionType::Create([
                'type' => $request->transactionTypes,
            ]);
        }else{

        }

        if($request->paymentSystem === 'banking' || $request->paymentSystem === 'check'){
            BankTransaction::create([
                'voucherNo' => $request->voucherNo,
            ]+ $transection_details + $debitCredit);
        }

        // Redirect back to the same page with a success message
        return view('admin.adminPages.accounting.receipt', compact('data'));
    }

    /**
     * Display the specified resource.
     */
    public function recycle()
    {
        $transaction = Transection::latest()->where('tresh', 1)->get();
        return view('admin.adminPages.accounting.recycle_bin',[
            'transaction' => $transaction
        ]);
    }

    /**
     * Restore the Trash resource.
     */
    public function restore(string $id)
    {
	
        $get_transaction = Transection::findorfail($id);

            $get_transaction -> update([
                'tresh'=>false,
            ]);

        return back()->with('success-table','Data restore successfull');

    }
/**
     * Show the form for editing the specified resource.
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

    public function transectionTresh($id)
    {
        $data =  Transection::findorFail($id);
	$user_id = Auth::guard('admin')->user()->id;

        if($data -> tresh){
            $data -> update([
                'tresh'=>false,
            ]);
        }else{
            $data -> update([
                'tresh'=>true,
		'trash_by'=>$user_id,
            ]);
        }

        return back()->with('success-table','Data Deleted successfull');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
	$data =  Transection::findOrFail($id);
	$data->delete();
	return back()->with('success-table','Data Deleted successfull');
        
    }

     /**
     * Remove the specified resource from storage.
     */
    public function destroySingle(string $id)
    {
	$data =  Transection::findOrFail($id);
	$data->delete();
	return back()->with('danger-table','Data Deleted successfull');
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function typeStore(Request $request)
    {
        TransactionType::create([
            'type' => $request->type,
        ]);
        return back()->with('success','Data Inserted Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function typeShow(Request $request)
    {
        $type = TransactionType::all();
        return view('admin.adminPages.accounting.type',[
            'types' => $type,
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function typeDestroy(string $id)
    {
        $data = TransactionType::findorFail($id);
        $data->delete();

        return back()->with('danger-table','Data deleted Successfully');
    }

}