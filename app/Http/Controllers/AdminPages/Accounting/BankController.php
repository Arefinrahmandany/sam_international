<?php

namespace App\Http\Controllers\AdminPages\Accounting;

use App\Models\Bank;
use App\Models\Transection;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
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
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Bank::create([
            'bank_name'         => $request->bank_name,
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
