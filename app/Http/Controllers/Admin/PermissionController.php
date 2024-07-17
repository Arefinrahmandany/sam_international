<?php

namespace App\Http\Controllers\Admin;

use App\Models\Permission;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PermissionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $all_permission = Permission::latest()->get();
        return view('admin.adminPages.users.permissions.index',[
            'all_permission'    =>  $all_permission,
            'form_type'         => 'create'
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
        //validate
        $this-> validate($request,[
            'name' => 'required|unique:permissions'
        ]);
        // data store to table
        Permission::create([
            'name'      => $request -> name,
            'slug'      => Str::slug($request -> name)
        ]);
        //redirect to back same page
        return back() -> with('success','Permission added successfully');

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
        $permissions    =   Permission::latest() -> get();
        $per            =   Permission::findOrFail($id);

        return view('admin.adminPages.users.permissions.index',[
            'all_permission'=> $permissions,
            'form_type'     => 'edit',
            'edit'          => $per

        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $update_data = Permission::findOrFail($id);
        $update_data -> update([
            'name'      => $request -> name,
            'slug'      => Str::slug($request -> name)
        ]);


        return redirect()-> route('user-permission.index') -> with('success','Data successfully updated');


    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $delete = Permission::findorFail($id);
        $delete -> delete();

        return back() -> with('success-table','Data successfully Deleted');


    }
}
