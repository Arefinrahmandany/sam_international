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
        $agent = Transection::where('agent', $agentID )->get();

        $transaction = AgentTransaction::where('trash',0)
                        ->where('status',1)
                        ->latest()
                        ->get();

        return view('admin.adminPages.agents_bd.transaction',[
            'transaction' => $transaction
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
