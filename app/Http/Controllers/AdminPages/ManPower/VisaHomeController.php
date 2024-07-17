<?php

namespace App\Http\Controllers\AdminPages\ManPower;

use App\Models\BMET;
use App\Models\Mofa;
use App\Models\Embassy;
use App\Models\Passports;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class VisaHomeController extends Controller
{
    public function index(Request $request)
    {
        $searchResult = $request->search;
        $dateFrom = $request->dateFrom;
        $dateTo = $request->dateTo;
        switch ($searchResult) {
            case 'Passport in Embassy':
                $data = Embassy::whereBetween('created_at', [$dateFrom, $dateTo])->get();
                // Handle the case when searching for "Passport in Embassy"
                // Implement your logic here if needed
                break;

            case 'Passport in Mofa':
                $data = Mofa::whereBetween('created_at', [$dateFrom, $dateTo])->get();
                break;

            case 'Passport in BMET':
                $data = BMET::whereBetween('created_at', [$dateFrom, $dateTo])->get();
                break;

            default:
                $data = Passports::all();
                break;
        }
        return view('admin.adminPages.man_power.ksaProcess.index',[
            'data' => $data,
            'dateFrom'=>$dateFrom,
            'dateTo'=>$dateTo
        ]);
    }
}
