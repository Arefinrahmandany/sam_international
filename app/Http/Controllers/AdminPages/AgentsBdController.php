<?php

namespace App\Http\Controllers\AdminPages;

use App\Models\AgentsBd;
use App\Models\Transection;
use Illuminate\Http\Request;
use App\Models\AgentTransaction;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class AgentsBdController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $agents = AgentsBd::all();

        $balances = [];
        foreach ($agents as $agent) {
            $agentTran = AgentTransaction::where('agent', $agent->id)->get();

            $totalDebit = $agentTran->sum('debit');
            $totalCredit = $agentTran->sum('credit');
            $totalDue = $agentTran->sum('due');
            $balance = $totalDebit + $totalDue - $totalCredit;

            $balances[$agent->id] = $balance;
        }

        $agents_data = AgentsBd::latest()
                ->where('trash',0)
                ->where('status',1)
                ->get();
        return view('admin.adminPages.agents_bd.index',[
            'agent_data' => $agents_data,
            'balance' => $balances,
            'form_type' => 'create'
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function create()
    {
        return view('admin.adminPages.agents_bd.show',[
            'form_type' => 'create',
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
            'cell' => 'required|unique:agents_bds,cell',
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
    public function show(Request $request, string $id)
    {
        if($request->rowOnPage){
            $rowOnPage = $request->rowOnPage;
        }else{
            $rowOnPage = "10";
        }
        //calculet Debit & Credit
        $totalDebit = AgentTransaction::where('agent', $id)->where('trash','0')->where('status','1')->sum('debit');
        $totalCredit = AgentTransaction::where('agent', $id)->where('trash','0')->where('status','1')->sum('credit');
        $totalAmount = $totalDebit - $totalCredit;

        $agents_transactions = AgentTransaction::where('agent',$id)->paginate($rowOnPage);
        $agent = AgentsBd::findorFail($id);
        return view('admin.adminPages.agents_bd.show',[
            'agent' => $agent,
            'rowOnPage' => $rowOnPage,
            'totalAmount' => $totalAmount,
            'agent_data' => $agents_transactions,
            'form_type' => 'show',
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {

        $agents_data = AgentsBd::latest()->get();
        $agent = AgentsBd::findorFail($id);

        return view('admin.adminPages.agents_bd.show',[
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

    public function trash($id)
    {

    $data =  AgentsBd::findorFail($id);

    if($data -> trash){
        $data -> update([
            'trash'=>false
        ]);
    }else{
        $data -> update([
            'trash'=>true
        ]);
    }

    return back()->with('success-table','Data Deleted successfull');

    }


}
