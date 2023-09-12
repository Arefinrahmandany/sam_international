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
        return view('backend.agents.agents');
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
        Agents::create([
            'name' => $request -> name,
            'phone' => $request -> phone,
            'email' => $request -> email,
            'nid' => $request -> nid,
            'address' => $request -> address,
        ]);

        return back();
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        return view('backend.agents.agent-SingleView');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        return view('backend.agents.agent-EditForm');
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
