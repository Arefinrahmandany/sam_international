<?php

namespace App\Http\Controllers\AdminPages\Travel;

use App\Models\AgentsBd;
use App\Models\Transection;
use App\Models\TravelAgency;
use Illuminate\Http\Request;
use App\Models\AirTicketSeller;
use App\Http\Controllers\Controller;
use App\Models\AirTicketPurchaseTransaction;
use App\Http\Controllers\AdminPages\TransectionController;

class AirTicketController extends Controller
{
    public function index()
    {
        $airTicket = TravelAgency::latest()->get();
        $agentsBd = AgentsBd::all();
        $ticketSeller = AirTicketSeller::all();
        return view('admin.adminPages.TravelAgency.Air.index',[
            'agentsBd' => $agentsBd,
            'airTicket' => $airTicket,
            'ticketSeller' => $ticketSeller
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
            'total_sale_price'   => $request->qty * $request->price,
            'airline'       => $request->airline,
            'flightFrom'    => $request->flightFrom,
            'destination'   => $request->destination,
            'departureDate' => $request->departureDate,
            'returnDate'    => $request->returnDate,
            // Calculate and set the total Purchase price
            'ticketSellerName'      => $request->ticketSellerName,
            'purchasePrice'         => $request->purchasePrice,
            'total_purchase_price'  => $request->qty * $request->purchasePrice,
        ]);

        AirTicketPurchaseTransaction::create([
            'sellerID'  => $request->ticketSellerName,
            'detail'    => 'For '.$request->qty.' pax, from '.$request->flightFrom.' to '.$request->destination.' on '.$request->departureDate.' return '.$request->returnDate,
            'debit' => $request->qty * $request->purchasePrice,
        ]);

        Transection::create([
            'voucherNo'=>$voucherNo,
            'agent'=>$request->agentsBd,
            'reciveFrom'=>$request->reciveFrom,
            'details'=>'For '.$request->qty.' pax, from '.$request->flightFrom.' to '.$request->destination.' on '.$request->departureDate.' return '.$request->returnDate,
            'due'=>$request->qty * $request->price,
        ]);

        return back()->with('success','Your Entry instertd');
    }

    public function seller()
    {
        $ticketSeller = AirTicketSeller::all();
        $balances = [];
        foreach ($ticketSeller as $seller) {
            $sellerTran = AirTicketPurchaseTransaction::where('sellerID', $seller->id)->get();

            $totalDebit = $sellerTran->sum('debit');
            $totalCredit = $sellerTran->sum('credit');
            $balance = $totalDebit - $totalCredit;
            $balances[$seller->id] = $balance;
        }

        $seller_data = AirTicketSeller::latest()->where('trash','0')->where('status','1')->get();
        return view('admin.adminPages.TravelAgency.Air.airTicketseller',[
            'form_type' => 'create',
            'balance' => $balances,
            'seller' => $seller_data
        ]);
    }
    public function sellerStore(Request $request)
    {
        AirTicketSeller::create([
            'name'      => $request -> name,
            'cell'     => $request -> cell,
            'email'     => $request -> email,
            'address'   => $request -> address,
        ]);
        return back()->with('success','Your data iserted successfully');
    }

    public function sellerEdit(string $id)
    {

        $sellerEdit = AirTicketSeller::findorfail($id);
        $seller = AirTicketSeller::latest()->get();
        return view('admin.adminPages.TravelAgency.Air.airTicketseller',[
            'form_type' => 'edit',
            'seller' => '$seller',
            'edit' => '$sellerEdit',
        ]);
    }

    public function sales()
    {
        $sales = AirTicketPurchaseTransaction::latest()->get();
        return view('admin.adminPages.TravelAgency.Air.ticketSale',[
            'sales' => $sales,
        ]);
    }

    public function sellerShow($id)
    {
        $seller= AirTicketPurchaseTransaction::where('sellerID',$id)->latest()->get();
        return view('admin.adminPages.TravelAgency.Air.showSeller',[

            'seller' => $seller,
        ]);
    }


}
