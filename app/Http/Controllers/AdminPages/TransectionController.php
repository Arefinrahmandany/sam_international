<?php

namespace App\Http\Controllers\AdminPages;

use Carbon\Carbon;
use App\Models\AgentsBd;
use App\Models\Transection;
use Illuminate\Http\Request;
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

        $agentsBd = AgentsBd::latest()->get();
        return view('admin.adminPages.accounting.pettyCash',[
            'agentsBd' => $agentsBd,
            'voucherNo' => $voucherNo,
            'today'=>$today
        ]);
    }

    /**
     * Display a listing of the resource.
     */
    public function dailyStatement(Request $request)
    {
        $today = $request->input('date', Carbon::today()->format('Y-m-d'));

        // Total Debit and Credit where 'tresh' is 0
        $debit = Transection::where('tresh', 0)->sum('debit');
        $credit = Transection::where('tresh', 0)->sum('credit');

        // Balance calculation
        $balance = $debit - $credit;

        // Day Transactions where 'created_at' is >= start of day and 'tresh' is 0
        $dayTransaction = Transection::where('created_at', '>=', Carbon::parse($today)->startOfDay())
            ->where('tresh', 0)
            ->get();

        // Day Due Transactions where 'created_at' is >= start of day and 'tresh' is 0
        $dayDueTransaction = Transection::where('created_at', '>=', Carbon::parse($today)->startOfDay())
            ->where('tresh', 0)
            ->sum('due');

        // Transaction Debits where 'created_at' is within the day, 'debit' > 0, and 'tresh' is 0
        $transaction_debit = Transection::where('created_at', '>=', Carbon::parse($today)->startOfDay())
            ->where('created_at', '<', Carbon::parse($today)->endOfDay())
            ->where('debit', '>', 0)
            ->where('tresh', 0)
            ->get();

        // Transaction Credits where 'created_at' is within the day, 'credit' > 0, and 'tresh' is 0
        $transaction_credit = Transection::where('created_at', '>=', Carbon::parse($today)->startOfDay())
            ->where('created_at', '<', Carbon::parse($today)->endOfDay())
            ->where('credit', '>', 0)
            ->where('tresh', 0)
            ->get();

        // Day Debit and Credit calculation
        $day_debit = $transaction_debit->where('tresh', 0)->sum('debit');
        $day_credit = $transaction_credit->where('tresh', 0)->sum('credit');

        // Day Balance calculation
        $day_balance = $day_debit - $day_credit;

        // Balance_bd calculation
        $balance_bd = $balance - $day_balance;

        return view('admin.adminPages.accounting.daily_ending', [
            'day_debit' => $day_debit,
            'day_credit' => $day_credit,
            'balance_bd' => $balance_bd,
            'balance' => $balance,
            'debit' => $transaction_debit,
            'credit' => $transaction_credit,
            'dayTransaction' => $dayTransaction,
            'dayDueTransaction' => $dayDueTransaction,
            'today' => $today
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

        $agentId = $request->agentsBd;
        $agentName = null; // Initialize the variable

        if (!empty($agentId)) {
            // Use try-catch to handle potential exceptions when querying the database
            try {
                // Eager load the 'agentDetails' relationship
                $Transection = Transection::with('agentDetails')->where('agent', 'LIKE', '%' . $agentId . '%')->firstOrFail();
                $agentName = optional($Transection->agentDetails)->name;
            } catch (\Illuminate\Database\Eloquent\ModelNotFoundException $e) {
                // Handle the case where no Transection is found for the given agent ID
                // $agentName is already null in this case
            }
        }

        $transection_details = [
            'details' => ($request->reciveFrom || empty($request->agentsBd))
                ? $request->paid_to . ' ' . $request->detail
                : (empty($request->reciveFrom) ? $agentName : $request->reciveFrom) . ' purpose ' . $request->detail,
        ];

        if($request->agentsBd == !null){
            $voucherNo = $this->generateUniqueVoucherNo();
            AgentTransaction::create([
                'voucherNo'     => $voucherNo,
                'reciveBy'      => $user_id,
                'agent'         => $request-> agentsBD,
                'detail'        => 'Receive from '. $agentName .' '. $request->detail,
                'credit'        => $request-> amount,
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
            'paymentSystem' => $request->paymentSystem,
            'user_id' => $user_id,
        ] + $transection_details + $debitCredit);

        // Redirect back to the same page with a success message
        return view('admin.adminPages.accounting.receipt', compact('data'));
    }

    /**
     * Display the specified resource.
     */
    public function recycle()
    {
        $transaction = Transection::latest()->get();
        return view('admin.adminPages.Recycling Bin.recyclingBin',[
            'transaction' => $transaction
        ]);
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


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
