<?php

namespace App\Http\Controllers\Admin;

use App\Models\Admin;
use App\Models\Roles;
use Illuminate\Http\Request;
use Intervention\Image\Image;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $all_admin = Admin::latest()-> where('trash',0)-> where('status',1)->get();
        $roles = Roles::latest()->get();
        return view('admin.adminPages.users.index',[
            'all_admin' => $all_admin,
            'roles'     => $roles,
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
        $this -> validate($request,[
            'name'      => ['required'],
            'email'     => ['required','unique:admins'],
            'cell'      => ['required','unique:admins'],
            'username'  => ['required','unique:admins'],
        ]);

        // password generate

        $pass_string = str_shuffle('qwertyuiopasdfghjklzxcvbnm1234567890');
        $pass = substr($pass_string, 10, 10);


        // Store data

        $user= Admin::create([
            'name'      => $request->name,
            'email'     => $request->email,
            'username'  => $request->username,
            'cell'      => $request->cell,
            'role_id'   => $request->role,
            'password'  => Hash::make($pass),
        ]);


//        $user-> notify( new AdminAccountInfoNotifiation([$user['name'], $pass]));

        return back()->with('success-table','user add successfully');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $admin      = Admin::findorFail($id);
        return view('admin.userEditForm',[
            'user'      => $admin,
            'form_type' => 'show',
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $admin      = Admin::findorFail($id);
        $all_admin  = Admin::latest()-> where('trash',0)->where('status',1)->get();
        $roles      = Roles::latest()->get();
        return view('admin.adminPages.users.index',[
            'all_admin'     => $all_admin,
            'admin_data'    => $admin,
            'roles'         => $roles,
            'form_type'     => 'edit',
        ]);

    }

    public function userEditForm(string $id)
    {
        $admin      = Admin::findorFail($id);
        return view('admin.userEditForm',[
            'user'      => $admin,
            'form_type' => 'edit',
        ]);

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $update_data = Admin::findorfail($id);

        //Single Image Upload by Asraful sir
        if( $request -> hasFile('userPhoto')){
            $img = $request -> file('userPhoto');
            $file_name = md5(time().rand()) . '.' .  $img->clientExtension();
            $img -> move(storage_path('app/public/users/'),$file_name);
        }else{
            $file_name = null;
        }

        // data store to table

        $update_data -> update([
            'name'      => $request -> name,
            'email'     => $request -> email,
            'username'  => $request -> userName,
            'role_id'   => $request -> role,
            'cell'      => $request -> cell,
            'location'  => $request -> location,
            'dob'       => $request -> dob,
            'photo'     => json_encode($file_name),
        ]);

        return redirect()->route('users.index')->with('success','Data successfully update');

    }

    /**
     * Update the specified resource in storage.
     */
    public function userupdate(Request $request, string $id)
    {
        $update_data = Admin::findorfail($id);

        //Single Image Upload by Asraful sir
        if( $request -> hasFile('userPhoto')){
            $img = $request -> file('userPhoto');
            $file_name = md5(time().rand()) . '.' .  $img->clientExtension();
            $img -> move(storage_path('app/public/users/'),$file_name);
        }else{
            $file_name = null;
        }

        // data store to table
        $update_data -> update([
            'name'      => $request -> name,
            'email'     => $request -> email,
            'username'  => $request -> userName,
            'cell'      => $request -> cell,
            'location'  => $request -> location,
            'dob'       => $request -> dob,
            'bio'       => $request -> bio,
            'photo'     => json_encode($file_name),
        ]);

        return redirect()->route('users.show',$id)->with('success','Data successfully update');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $delete = Admin::findorFail($id);
        $delete -> delete();

        return back() -> with('success-table','Data successfully Deleted');

    }


    /**
     * Status Update
     */

    public function updateStatus($id)
    {

    $data =  Admin::findorFail($id);

    if($data -> status){
        $data -> update([
            'status'=>false
        ]);
    }else{
        $data -> update([
            'status'=>true
        ]);
    }

    return back()->with('success-table','status update successfull');

    }


    public function updateTresh($id)
    {

    $data =  Admin::findorFail($id);

    if($data -> trash){
        $data -> update([
            'trash'=>false
        ]);
    }else{
        $data -> update([
            'trash'=>true
        ]);
    }

    return back()->with('success-table','Data Deleted successfull');

    }

    public function passwordChangeForm(){

        return view('admin.passwordChange');

    }

    public function passwordChange(Request $request)
    {
        $user = Auth::guard('admin')->user();
         // Check Old Password
        if(!password_verify($request->oldPassword,$user->password)){
            return back()->with('danger','Password not match');
        }

        $password = Admin::findorfail($user->id);
        $password -> UPDATE([
            'password' => Hash::make($request-> newPassword)
        ]);
        return back()->with('success','Your Password change');
    }

}
