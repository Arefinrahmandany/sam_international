<?php

namespace App\Http\Controllers;

use App\Models\Agents;
use App\Models\Accounts;
use Illuminate\Http\Request;

class AgentsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $agents = Agents::latest() -> get();
        return view('backend.page.agents.index',[
        'agents' => $agents
        ]);
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $agents = Agents::latest() -> get();
        return view('backend.page.agents.agents',[
            'agents'    => $agents,
            'form_type'     => 'new_agent'
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //validate
        $this-> validate($request,[
            'name' => 'required',
            'phone' => 'required|starts_with:01,0088,+88,02|unique:agents',
            'email' => 'email| unique:agents',
        ]);
        // data store to table
        Agents::create([
            'name'      => $request -> name,
            'phone'     => $request -> phone,
            'email'     => $request -> email,
            'address'   => $request -> address,
        ]);
        //redirect to back same page
        return back() -> with('success','Agent successfully inserted');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $agent = Agents::findOrFail($id);
        $transactions = Accounts::where('receiveFrom', $id)->get();

        // Initialize the balance and due to 0 for the first transaction
        $balance = 0;
        $due = 0;

        foreach ($transactions as $transaction) {
            $debit = floatval($transaction->debit);
            $credit = floatval($transaction->credit);

            // Calculate the due for the current transaction
            $currentDue = $debit - $credit;

            // Calculate the balance for the current transaction
            $balance = $balance + $debit - $credit + $currentDue;

            // Assign the calculated balance and due to the current transaction
            $transaction->balance = $balance;
            $transaction->due = $currentDue;

            // Update the total due amount
            if ($currentDue > 0) {
                $due += $currentDue;
            }
        }

        return view('backend.agents.agentSingleView', [
            'all_data' => $agent,
            'transactions' => $transactions,
            'due' => $due, // Pass the total due amount to the view
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        //send data for Edit
        $edit_data = Agents::findorfail($id);
        $agents = Agents::latest() -> get();
        return view('backend.page.agents.agents',[
            'agents'    =>$agents,
            'edit_data' => $edit_data,
            'form_type' => 'edit'

        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $update_data = Agents::findorfail($id);

        // data store to table

        $update_data -> update([
            'name'      => $request -> name,
            'phone'     => $request -> phone,
            'email'     => $request -> email,
            'address'   => $request -> address,
        ]);

        return redirect()->route('agents.create')->with('success','Data successfully update');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $delete_data = Agents::findorfail($id);
        $delete_data -> delete();
        return back() -> with('success','Data successfully inserted');
    }
}
