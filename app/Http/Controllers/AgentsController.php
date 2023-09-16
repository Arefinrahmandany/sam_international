<?php

namespace App\Http\Controllers;

use App\Models\Agents;
use Illuminate\Http\Request;

class AgentsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Agents::all();
        return view('backend.agents.agents',[
        'all_data' => $data
        ]);
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.agents.agentCretae');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //validate
        $this-> validate($request,[
            'name' => 'required',
            'phone' => 'required|starts_with:01,0088,+88,02|unique:agents',
            'email' => 'email| unique:agents',
        ]);
        // data store to table
        Agents::create([
            'name' => $request -> name,
            'phone' => $request -> phone,
            'email' => $request -> email,
            'nid' => $request -> nid,
            'address' => $request -> address,
        ]);
        //redirect to back same page
        return back() -> with('success','Data successfully inserted');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $data = Agents::all();
        return view('backend.agents.agentSingleView',[
            'all_data' => $data
            ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        return view('backend.agents.agentEditForm');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $update_data = Agents::findorfail($id);

        $update_data -> update([
            'name' => $request -> name,
            'phone' => $request -> phone,
            'email' => $request -> email,
            'nid' => $request -> nid,
            'status' => $request -> status,
            'address' => $request -> address,
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
