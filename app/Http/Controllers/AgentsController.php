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
        $agents = Agents::latest() -> get();
        return view('backend.agents.agents',[
        'agents_all' => $agents
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
            'name'      => $request -> name,
            'phone'     => $request -> phone,
            'email'     => $request -> email,
            'nid'       => $request -> nid,
            'address'   => $request -> address,
        ]);
        //redirect to back same page
        return back() -> with('success','Agent successfully inserted');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $all_data = Agents::findorfail($id);
        return view('backend.agents.agentSingleView',[
            'all_data' => $all_data
            ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        //send data for Edit
        $edit_data = Agents::findorfail($id);
        return view('backend.agents.agentEditForm',[
            'edit_data' => $edit_data

        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $update_data = Agents::findorfail($id);

        // data store to table

        $update_data -> update([
            'name'      => $request -> name,
            'phone'     => $request -> phone,
            'email'     => $request -> email,
            'nid'       => $request -> nid,
            'address'   => $request -> address,
        ]);

        return back() -> with('success','Data successfully update');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $delete_data = Agents::findorfail($id);
        $delete_data -> delete();
        return back() -> with('success','Data successfully inserted');
    }
}
