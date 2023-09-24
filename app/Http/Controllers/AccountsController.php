<?php

namespace App\Http\Controllers;

use App\Models\Agents;
use App\Models\Accounts;
use Illuminate\Http\Request;

class AccountsController extends Controller
{
    /**
     * method for calculet balance.
     */
    public function calculateBalances($transections)
    {
    $balance = 0;

    foreach ($transections as $transection) {
        $debit = floatval($transection->debit);
        $credit = floatval($transection->credit);

        $balance += ($debit - $credit);

        $transection->balance = $balance;
    }

    return $transections;
}


    /**
     * method for accounts home page.
     */
    public function index()
    {
        $agents = Agents::all();
        $transection_data = Accounts::all();
        $transections = $this->calculateBalances($transection_data);
            return view('backend.accounts.accounts',[
                'all_agents'=> $agents,
                'transections' => $transection_data
            ]);
        }

    public function balancesheet()
    {
        $agents = Agents::all();
        $transection_data = Accounts::all();
        $transections = $this->calculateBalances($transection_data);
            return view('backend.accounts.account-invoice-table',[
                'all_agents'=> $agents,
                'transections' => $transection_data
            ]);
        }

    /**
     * method for recive money recipt form in accounts.
     */

    public function create()
    {
        $agents = Agents::all();
            return view('backend.accounts.recipt-form',[
                'all_agents'=> $agents,
            ]);
        }

        /**
     * method for expense money form in accounts.
     */

    public function expense()
    {
        $agents = Agents::all();
            return view('backend.accounts.creditSheet',[
                'all_agents'=> $agents,
            ]);
    }



/**
     * method for recive money recipt form store data in accounts.
     */

    public function paymentstore(Request $request)
    {
         // Initialize the data array with common fields
        $data = [
            'invoiceNumber' => $request->invoiceNumber,
            'debit' => $request->amount,
            'description' => $request->forPayment,
            'receiveby' => $request->receiveby,
            'paymentSystem' => $request->paymentSystem,
        ];

         // Conditionally set the 'receiveFrom' field based on 'byAgent' or 'receiveFrom' in the request
        if (!empty($request->byAgent)) {
            $data['receiveFrom'] = $request->byAgent;
        } else {
            $data['receiveFrom'] = $request->receiveFrom;
        }

         // Create a new record in the 'Accounts' model using the $data array
        Accounts::create($data);

        // Store the data in the session
    $request->session()->put('receiptData', $data);

         // Redirect back to the same page with a success message
        return redirect()->route('accounts/receipt.showReceipt');
    }
    public function showReceipt(Request $request)
{
    // Retrieve data to be displayed on the receipt
    $data = [
        'invoiceNumber' => $request->invoiceNumber,
        'debit' => $request->amount,
        'forPayment' => $request->forPayment,
        'description' => $request->forPayment,
        'receiveby' => $request->receiveby,
        'paymentSystem' => $request->paymentSystem,

    ];
    // Conditionally set the 'receiveFrom' field based on 'byAgent' or 'receiveFrom' in the request
    if (!empty($request->byAgent)) {
        $data['receiveFrom'] = $request->byAgent;
    } else {
        $data['receiveFrom'] = $request->receiveFrom;
    }

    // Retrieve data to be displayed on the receipt from the session
    $data = $request->session()->get('receiptData');

    return view('backend.accounts.receipt', $data);
}

    /**
     * method for Expense form store data in accounts.
     */

    public function expenseCreate(Request $request)
    {

        // data store to table
        Accounts::create([
            'invoiceNumber' => $request -> invoiceNumber,
            'description' => $request -> description,
            'credit' => $request -> amount,
            'receiveby' => $request -> receiveby,
            'paymentSystem' => $request -> paymentSystem,
        ]);
        return back() -> with('success','Data successfully inserted');
    }

    /**
     * Show a all created resource in storage.
     */
    public function table()
    {
        $transactions = Accounts::table('accounts')
    ->select(Accounts::raw('COALESCE(by_agent, receiveFrom) as agent_or_receive'))
    ->get();
        $transection_table = Accounts::all();
        return view('backend.accounts.account-invoice-table',[
            'transection_table' => $transection_table
        ]);
    }


    /**
     * Edit the input .
     */
    public function edit($id)
    {
        //send data for Edit
        $agents = Agents::all();
        $edit_data = Accounts::findorfail($id);
        return view('backend.accounts.accountEditForm',[
            'edit_data' => $edit_data,
            'all_agents' => $agents
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $update_data = Accounts::findorfail($id);

        // data store to table

        $update_data -> update([
            'invoiceNumber'      => $request -> invoiceNumber,
            'debit'     => $request -> debit,
            'credit'       => $request -> credit,
            'description'   => $request -> balance,
            'address'   => $request -> description,
            'receiveFrom'   => $request -> reciveFrom,
            'receiveby'   => $request -> receiveby,
            'paymentSystem'   => $request -> paymentSystem,
        ]);

        return back() -> with('success','Data successfully update');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $delete_data = Accounts::findorfail($id);
        $delete_data -> delete();
        return back() -> with('success','Data successfully inserted');
    }
}
