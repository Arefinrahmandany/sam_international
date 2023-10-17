<?php

namespace App\Http\Controllers\Admin;

use App\Models\Permission;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Str;

class PermissionController extends Controller
{
    /**
     * load permision page
    */
    public function index(){

        $permissions=Permission::latest() -> get();

        return view('backend.page.user.permission.index',[
            'all_permission' => $permissions,

            'form_type'     => 'create'
        ]);

    }


    /**

     * Show resource in storage.

     */
    public function show(){

        $permissions=Permission::latest() -> get();

        return view('backend.page.user.permission.index',[
            'all_permission' => $permissions
        ]);

    }
    /**

     * Store a newly created resource in storage.

     */
    public function store(Request $request){

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
     * Edit permision Data
    */
    public function edit(string $id){

        $permissions    =   Permission::latest() -> get();
        $per            =   Permission::findOrFail($id);

        return view('backend.page.user.permission.index',[
            'all_permission'=> $permissions,
            'form_type'     => 'edit',
            'edit'          => $per

        ]);


    }

    /**
     * load permision page
    */
    public function update(Request $request, $id){


        $update_data = Permission::findOrFail($id);
        $update_data -> update([
            'name'      => $request -> name,
            'slug'      => Str::slug($request -> name)
        ]);


        return redirect()-> route('permission.index') -> with('success','Data successfully updated');
    }
    /**
     * Delete permision data
    */
    public function destroy(string $id){

        $delete = Permission::findorFail($id);
        $delete -> delete();

        return back() -> with('success-table','Data successfully Deleted');

    }
}
