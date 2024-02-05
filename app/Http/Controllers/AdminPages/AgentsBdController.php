<?php

namespace App\Http\Controllers\AdminPages;

use App\Models\AgentsBd;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class AgentsBdController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $agents_data = AgentsBd::latest()->get();
        return view('admin.adminPages.agents_bd.index',[
            'agent_data' => $agents_data,
            'form_type' => 'create'
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //validate
        $this-> validate($request,[
            'name' => 'required',
            'cell' => 'required|starts_with:01,0088,+88,02|unique:agents_bds',
            'email' => 'email| unique:agents_bds',
        ]);
        // data store to table
        AgentsBd::create([
            'name'      => $request -> name,
            'cell'     => $request -> cell,
            'email'     => $request -> email,
            'address'   => $request -> address,
        ]);
        //redirect to back same page
        return back() -> with('success','Agent successfully inserted');


    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {

     /*
        $all_transection = Transaction::WHERE('agent',$id)->get();
        //calculet Debit & Credit
        $totalDebit = NewPassport::where('agent_via', $id)->sum('amount');
        $totalCredit = Transaction::where('agent', $id)->sum('credit');
        $totalAmount = $totalDebit - $totalCredit;


       // $transaction_first = NewPassport::where('agent', $id)->first();
        $transactions = NewPassport::where('agent_via', $id)->get();

        $agent = Agents::findOrfail($id);
*/

        $agent = AgentsBd::findorFail($id);
        return view('admin.adminPages.agents_bd.show',[
            'agent' => $agent
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {

        $agents_data = AgentsBd::latest()->get();
        $agent = AgentsBd::findorFail($id);

        return view('admin.adminPages.agents_bd.index',[
            'agent_data' => $agents_data,
            'agent' => $agent,
            'form_type' => 'edit'
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $update_data = AgentsBd::findorfail($id);

        // data store to table

        $update_data -> update([
            'name'      => $request -> name,
            'cell'     => $request -> cell,
            'email'     => $request -> email,
            'address'   => $request -> address,
        ]);

        return redirect()->route('agentsBd.index')->with('success','Data successfully update');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    /**
     * Tresh Update
     */

    public function updateTresh($id)
    {

    $data =  AgentsBd::findorFail($id);

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


}
