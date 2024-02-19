<?php

namespace App\Http\Controllers\AdminPages;

use App\Models\TravelAgency;
use Illuminate\Http\Request;
use App\Models\Passports_new;
use Illuminate\Support\Carbon;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       // Get the current date
        $currentDate = Carbon::now()->toDateString();


        $passport_receive = Passports_new::whereDate('created_at', $currentDate)->count();

        $bmet_pass = Passports_new::where('bmet_status','pass')->whereDate('updated_at', $currentDate)->count();
        $bmet_reject = Passports_new::whereDate('updated_at', $currentDate)->where('bmet_status','rejected')->count();

        $dayTicketSaleTotal = TravelAgency::whereDate('created_at', $currentDate)->sum('total_price');
        $dayTicketSaleQty = TravelAgency::whereDate('created_at', $currentDate)->sum('qty');

        // Get all passports
        $passports = Passports_new::latest()->get();

        return view('admin.index', [
            'bmet_pass' => $bmet_pass,
            'bmet_reject' => $bmet_reject,
            'passport_receive' => $passport_receive,
            'passports' => $passports,
            'dayTicketSaleTotal' => $dayTicketSaleTotal,
            'dayTicketSaleQty' => $dayTicketSaleQty
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
