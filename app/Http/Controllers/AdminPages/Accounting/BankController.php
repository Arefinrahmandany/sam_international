<?php

namespace App\Http\Controllers\AdminPages\Accounting;

use App\Models\Bank;
use App\Models\Transection;
use Illuminate\Http\Request;
use App\Models\BankTransaction;
use App\Http\Controllers\Controller;
use App\Models\AgentsBd;
use PHPUnit\Framework\MockObject\ReturnValueNotConfiguredException;

class BankController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $banks = Bank::all();
        $balances = [];

        foreach ($banks as $bank) {
            $banks_name = $bank->bank_name; // Use $bank->id to get the ID of the current bank

            $bank_balance = Transection::where('details', 'LIKE', '%' . $banks_name . '%')->get();

            $total_debit = $bank_balance->sum('debit');
            $total_credit = $bank_balance->sum('credit');
            $balance = $total_debit - $total_credit;

            // Store the balance for the current bank
            $balances[$bank->bank_name] = $balance;
        }

        return view('admin.adminPages.accounting.bank.index',[
            'banks'  =>  $banks,
            'balances'  =>  $balances,
            'form_type' =>  'create'
        ]);
    }

    /**
     * Display a listing of the resource.
     */
    public function transactions(Request $request)
    {
        $startDate = $request->startDate;
        $endDate = $request->endDate;
        $searchAgent = $request->agents;
        $searchBanks = $request->banks;

        $agents = AgentsBd::all();
        $banks = Bank::all();

        $bankTransaction = BankTransaction::latest()->where('trash','0')->where('status','1');

        if (!empty($startDate) && !empty($endDate)) {
            $bankTransaction->whereBetween('created_at', [$startDate, $endDate]);
        }
        if (!empty($searchBanks)) {
            $bankTransaction->where('details','LIKE', '%' . $searchBanks . '%');
        }
        if (!empty($searchAgent)) {
            $bankTransaction->where('details','LIKE', '%' . $searchAgent . '%');
        }
        $bankTransaction = $bankTransaction->get();

        return view('admin.adminPages.accounting.bank.bankTransactions',[
            'agents'  =>  $agents,
            'banks'  =>  $banks,
            'bankTransaction'  =>  $bankTransaction,
        ]);
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Bank::create([
            'bank_name'         => strtoupper($request->bank_name),
            'bank_branch_name'  => $request->bank_branch_name,
            'account_name'      => $request->account_name,
            'account_number'    => $request->account_number,
        ]);

        return back()->with('success','Data inserted successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $bank_data = Bank::findorfail($id);
        $banks_name = $bank_data -> bank_name;

        $bank_balance = Transection::where('details', 'LIKE', '%' . $banks_name . '%')->get();

        $total_debit = $bank_balance->sum('debit');
        $total_credit = $bank_balance->sum('credit');
        $balance = $total_debit - $total_credit;

        return view('admin.adminPages.accounting.bank.show',[
            'bank_transection' => $bank_balance,
            'balance' => $balance
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $bank = Bank::findorfail($id);
        $banks = Bank::latest()->where('trash','false')->get();
        return view('admin.adminPages.accounting.bank.index',[
            'bank'      =>  $bank,
            'banks'     =>  $banks,
            'form_type' =>  'edit'
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {

        $update_data = Bank::findorfail($id);

        $update_data -> update([
            'bank_name'         => $request->bank_name,
            'bank_branch_name'  => $request->bank_branch_name,
            'account_name'      => $request->account_name,
            'account_number'    => $request->account_number,
        ]);

        return redirect()->route('bank.index')->with('success','Data update successfully');
    }

    /**
     * trash the specified resource from storage.
     */
    public function trash(string $id)
    {
        $data =  Bank::findorFail($id);

        if($data -> trash){
            $data -> update([
                'trash'=>false
            ]);
        }else{
            $data -> update([
                'trash'=>true
            ]);
        }

        return back()->with('denger-table','Data Deleted successfull');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $delete_data = Bank::findorfail($id);

        $delete_data -> delete();

        return back() -> with('danger-table','Data successfully Deleted');
    }
}