<?php

namespace App\Http\Controllers\AdminPages\Reports;

use Carbon\Carbon;
use App\Models\Service;
use App\Models\AgentsBd;
use App\Models\Passports;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AgentsReportController extends Controller
{
    public function index(Request $request)
    {
        $today = Carbon::today();

        if($request->has('start_date')){
            $startDate = $request->input('start_date', $today);
        }else{
            $startDate = "";
        }

        if($request->has('end_date')){
            $endDate = $request->input('end_date', $today);
        }else{
            $endDate = "";
        }

        if($request->agent){
            $searchAgent = $request->agent;
        }else{
            $searchAgent = "";
        }

        if($request->service){
            $searchService = $request->service;
        }else{
            $searchService = "";
        }

        $passportItems = Passports::latest()
            ->where('trash', '0')
            ->where('status', '1');

        if (!empty($startDate) && !empty($endDate)) {
            $passportItems = $passportItems->wheredate('created_at','>=',$startDate )
                                            ->wheredate('created_at','<=',$endDate );
        }

        if (!empty($request->agent)) {
                $passportItems = $passportItems->where('agentsBD',$searchAgent);
            }

        if (!empty($request->service)) {
                $passportItems = $passportItems->where('service',$searchService);
            }
        $agentName = AgentsBd::find($searchAgent);

            $passportItems = $passportItems->latest()->get();
            $agent = AgentsBd::all();
            $service = Service::all();
        return view('admin.adminPages.reports.agentsReport',[
            'startDate' => $startDate,
            'endDate' => $endDate,
            'searchService' => $searchService,
            'searchAgent' => $searchAgent,
            'agentName' => $agentName,
            'passportItems' => $passportItems,
            'agent' => $agent,
            'service' => $service,
        ]);
    }
}