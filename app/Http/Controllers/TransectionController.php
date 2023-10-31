<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Transaction;
use Illuminate\Http\Request;

class TransectionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $today = Carbon::today();

        $currentdebitSum = Transaction::whereDate('created_at', $today)->sum('debit');
        $currentcreditSum = Transaction::whereDate('created_at', $today)->sum('credit');

        $transactions = Transaction::all();
        $debit = Transaction::sum('debit');
        $credit = Transaction::sum('credit');
        $balance = $debit - $credit ;



        $all_data = Transaction::latest() -> get();
        return view('backend.page.accounts.index',[
            'all_Transaction'   => $all_data,
            'balance'           => $balance,
            'debit'             => $debit,
            'currentdebitSum'   => $currentdebitSum,
            'currentcreditSum'   => $currentcreditSum,
            'form_type'         => 'payment_recive'
        ]);

    }

    public function transectionCalculator(){
        $transactions = Transaction::all();
        $debit = Transaction::SUM('debit');
        $credit = Transaction::SUM('credit');
        $balance = $credit - $debit;

        return view('backend.page.accounts.transections',[

            'balance'   => $balance
        ]);

    }

    public function expense()
    {

        $today = Carbon::today();

        $currentdebitSum = Transaction::whereDate('created_at', $today)->sum('debit');
        $currentcreditSum = Transaction::whereDate('created_at', $today)->sum('credit');


        $today = Carbon::today();
        $transactions = Transaction::all();
        $debit = Transaction::sum('debit');
        $credit = Transaction::sum('credit');
        $balance = $debit - $credit ;


        $all_data = Transaction::latest() -> get();
        return view('backend.page.accounts.transections',[
            'all_Transaction' => $all_data,
            'form_type' => 'expense',
            'balance'   => $balance,
            'currentdebitSum'   => $currentdebitSum,
            'currentcreditSum'   => $currentcreditSum,
            'debit' => $debit
        ]);

    }




    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $today = Carbon::today();

        $currentdebitSum = Transaction::whereDate('created_at', $today)->sum('debit');
        $currentcreditSum = Transaction::whereDate('created_at', $today)->sum('credit');


        $transactions = Transaction::all();
        $debit = Transaction::sum('debit');
        $credit = Transaction::sum('credit');
        $balance = $debit - $credit ;



        $all_data = Transaction::latest() -> get();
        return view('backend.page.accounts.transections',[
            'all_Transaction' => $all_data,
            'balance'   => $balance,
            'debit' => $debit,
            'currentdebitSum'   => $currentdebitSum,
            'currentcreditSum'   => $currentcreditSum,
            'form_type' => 'payment_recive'
        ]);
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //Input Data Validate

        $this-> validate($request,[
            'transectionNum'    => 'required|unique:transactions',
        ]);

        Transaction::create([
            'transectionNum'    => $request -> transectionNum,
            'reciveBy'          => $request -> reciveBy,
            'agent'             => $request -> agent,
            'reciveFrom'        => $request -> reciveFrom,
            'details'           => $request -> details,
            'debit'             => $request -> debit,
            'credit'            => $request -> credit,
            'paymentSystem'     => $request -> paymentSystem,

        ]);

        return back() -> with('success','Data successfully inserted');


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

        $today = Carbon::today();

        $currentdebitSum = Transaction::whereDate('created_at', $today)->sum('debit');
        $currentcreditSum = Transaction::whereDate('created_at', $today)->sum('credit');

        $transactions = Transaction::all();
        $debit = Transaction::sum('debit');
        $credit = Transaction::sum('credit');
        $balance = $debit - $credit ;


        $all_data = Transaction::latest() -> get();
        $find_data = Transaction::findorfail($id);
        return view('backend.page.accounts.transections',[
            'all_Transaction' => $all_data,
            'form_type' => 'edit',
            'edit'  => $find_data,
            'balance'   => $balance,
            'currentdebitSum'   => $currentdebitSum,
            'currentcreditSum'   => $currentcreditSum,
            'debit' => $debit
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {

        // update store

        $update_data = Transaction::findorfail($id);
        $update_data -> update([
            'transectionNum'    => $request -> transectionNum,
            'reciveBy'          => $request -> reciveBy,
            'details'           => $request -> detail,
            'credit'            => $request -> credit,
            'paymentSystem'     => $request -> paymentSystem,
            'agent'             => $request -> agent,
            'reciveFrom'        => $request -> reciveFrom,
            'debit'             => $request -> debit,
        ]);


        return back() -> with('success','Data successfully updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $delete = Transaction::findorFail($id);

        $delete -> delete();

        return back() -> with('danger-table','Data successfully DELETED');
    }
}
