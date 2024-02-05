<?php

namespace App\Http\Controllers\Admin;

use App\Models\Roles;
use App\Models\Permission;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RolesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $roles = Roles:: latest() -> get();
        $permissions = Permission:: latest() -> get();

        return view('admin.adminPages.users.roles.index',[
            'roles'         => $roles,
            'permissions'   => $permissions,
            'form_type' => 'create'
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //Validation

        $this-> validate($request, [
            'name'  => ['required']
        ]);


        //store role

        Roles::create([
            'name'          => $request ->  name,
            'slug'          => Str::slug($request -> name),
            'permissions'   => json_encode($request -> permission)
        ]);

        // return Back

    return back()-> with('success','Role Create sucessfully');
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
        $edit       = Roles:: FindOrFail($id);
        $roles      = Roles:: latest() -> get();
        $permissions= Permission:: latest() -> get();

        return view('admin.adminPages.users.roles.index',[
            'roles'          => $roles,
            'permissions'   => $permissions,
            'form_type'     => 'edit',
            'edit'          => $edit

        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {

        $update_data = Roles::findOrFail($id);
        //Update role

        $update_data -> update([
            'name'          => $request -> name,
            'slug'          => Str::slug($request -> name),
            'permissions'   => json_encode($request -> permission)
        ]);

        return redirect()-> route('user-role.index')-> with('success-table','Role Update Successfully');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
