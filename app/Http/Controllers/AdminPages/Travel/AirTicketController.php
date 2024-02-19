<?php

namespace App\Http\Controllers\AdminPages\Travel;

use App\Models\AgentsBd;
use App\Models\Transection;
use App\Models\TravelAgency;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Controllers\AdminPages\TransectionController;

class AirTicketController extends Controller
{
    public function index()
    {
        $airTicket = TravelAgency::latest()->get();
        $agentsBd = AgentsBd::all();
        return view('admin.adminPages.TravelAgency.Air.index',[
            'agentsBd' => $agentsBd,
            'airTicket' => $airTicket
        ]);
    }

    public function store(Request $request)
    {
        // Instantiate TransectionController
        $transectionController = new TransectionController();

        // Call the generateUniqueVoucherNo() method
        $voucherNo = $transectionController->generateUniqueVoucherNo();// Generates a unique random number between 1000 and 9999

        // Validate the form data
        $request->validate([
            'agentsBd' => 'required',
            'details' => 'required',
            'qty' => 'required|numeric',
            'price' => 'required|numeric',
        ]);

        TravelAgency::create([
            'buyer_name'    => ($request->agentsBd === 'new') ? $request->reciveFrom : $request->agentsBd,
            'details'       => $request->details,
            'qty'           => $request->qty,
            'price'         => $request->price,
            // Calculate and set the total price
            'total_price'   => $request->qty * $request->price,
            'airline'       => $request->airline,
            'flightFrom'    => $request->flightFrom,
            'destination'   => $request->destination,
            'departureDate' => $request->departureDate,
            'returnDate'    => $request->returnDate,
        ]);

        Transection::create([
            'voucherNo'=>$voucherNo,
            'agent'=>$request->agentsBd,
            'reciveFrom'=>$request->reciveFrom,
            'details'=>$request->details . '-' .$request->price . '-' . $request->qty,
            'due'=>$request->qty * $request->price,
        ]);

        return back()->with('success','Your Entry instertd');
    }
}
