<?php

namespace App\Http\Controllers;

use App\Models\Agents;
use App\Models\Accounts;
use Illuminate\Http\Request;

class AccountsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $agents = Agents::all();
        $data = Accounts::latest()->get();
        return view('backend.accounts.accounts',[
            'all_agents'=> $agents,
            'accounts_all_data' => $data
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.accounts.accountNew');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {



        // data store to table
        Accounts::create([
            'invoiceNumber' => $request -> invoiceNumber,
            'by_agent' => $request ->byAgent,
            'receiveFrom' => $request ->receiveFrom,
            'debit' => $request -> amount,
            'description' => $request -> forPayment,
            'receiveby' => $request -> receiveby,
            'paymentSystem' => $request -> paymentSystem,
        ]);

        //redirect to back same page

        return back() -> with('success','Data successfully inserted');
    }

    public function expense()
    {
        $agents = Agents::all();
        $data = Accounts::all();
        return view('backend.accounts.creditSheet',[
            'all_agents'=> $agents,
            'accounts_all_data' => $data
        ]);

    }
    public function expenseStore(Request $request)
    {

        // data store to table
        Accounts::create([
            'invoiceNumber' => $request -> invoiceNumber,
            'description' => $request -> payment,
            'credit' => $request -> amount,
            'receiveby' => $request -> receiveby,
            'paymentSystem' => $request -> paymentSystem,
        ]);
        return back() -> with('success','Data successfully inserted');
    }

    /**
     * Display the specified resource.
     */
    public function show(Accounts $accounts)
    {
        //
    }

    /**
     * Show the form for creating a Invoice.
     */
    public function invoice()
    {
        $agents = Agents::all();
        return view('backend.accounts.invoice',[
            'all_agents'=> $agents
                ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Accounts $accounts)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Accounts $accounts)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Accounts $accounts)
    {
        //
    }
}
