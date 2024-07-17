<?php

namespace App\Http\Controllers\AdminPages;

use App\Models\AgentsBd;
use App\Models\Transection;
use Illuminate\Http\Request;
use App\Models\AgentTransaction;
use App\Http\Controllers\Controller;

class AgentController extends Controller
{
    public function index()
    {
        $agentID = AgentsBd::all('id');
        $agent = Transection::where('agent', $agentID )
                ->where('trash',0)
                ->where('status',1)
                ->get();

        $transaction = AgentTransaction::where('trash',0)
                        ->where('status',1)
                        ->latest()
                        ->get();

        return view('admin.adminPages.agents_bd.transaction',[
            'transaction' => $transaction
        ]);
    }

    public function transactions(Request $request)
    {
        $startDate = $request->startDate;
        $endDate = $request->endDate;
        $searchAgent = $request->agents;

        $agents = AgentsBd::all();
        $agentTransaction = AgentTransaction::latest()->where('trash','0')->where('status','1');

        if (!empty($startDate) && !empty($endDate)) {
            $agentTransaction->whereBetween('created_at', [$startDate, $endDate]);
        }
        if (!empty($searchAgent)) {
            $agentTransaction->where('detail', 'LIKE', '%' .$searchAgent.'%'  );
        }
        $agentTransaction = $agentTransaction->get();
        return view('admin.adminPages.agents_bd.transaction',[
            'agentTransaction' => $agentTransaction,
            'startDate' => $startDate,
            'endDate' => $endDate,
            'agents' => $agents,
        ]);
    }

    public function edit(string $id)
    {
        $agentdata = AgentTransaction::findorFail($id);
        return view('',[
            'agentdata' => $agentdata,
            'form_type' => 'agentTransaction'
        ]);
    }

    public function update(Request $request, string $id)
    {
        $update_data = AgentTransaction::findorFail($id);

        $update_data->update([

        ]);
    }

    public function trash(string $id)
    {
        $data =  AgentTransaction::findorFail($id);

        if($data -> tresh){
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