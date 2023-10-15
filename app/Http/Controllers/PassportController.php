<?php

namespace App\Http\Controllers;


use App\Mail\SendMail;

use App\Models\Agents;
use App\Models\Accounts;
use App\Models\countries;
use App\Mail\notification;
use App\Models\NewPassport;
use Illuminate\Http\Request;
use function Termwind\render;
use Illuminate\Support\Facades\Mail;
use App\Notifications\NewPassportNotification;
use Intervention\Image\Facades\Image;

class PassportController extends Controller
{

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = NewPassport::latest() -> get();
        return view('backend.page.passports.passports',[
            'all_data' => $data

        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $countries_data = countries::all();
        $agents = Agents::all();
        return view('backend.passports.passportCreate',[
            'all_countries' => $countries_data,
            'all_agents' => $agents
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        //validate
        $this-> validate($request,[
            'passpoertNumber' => 'required',
            'name' => 'required',
            'phone' => 'required|starts_with:01,0088,+88,02|unique:new_passports',
            'email' => 'email',
            'payment' => 'integer',
        ]);


       //Photo upload
    /*single file upload function
        if( $request -> hasFile('photo')){


            $img = $request -> file('photo');

            $file_name = md5(time().rand()) . '. ' .  $img -> clientExtension();

            $img -> move(public_path('photos/passportsPaper/'), $file_name);

        }else{

            $file_name = null;

        }*/


        if( $request -> hasFile('photo')){


            $img = $request -> file('photo');

            $file_name = md5(time().rand()) . '. ' .  $img -> clientExtension();

            $img -> move(public_path('photos/passportsPaper/'), $file_name);

        }else{

            $file_name = null;
        }

        $newPassport = NewPassport::create([
            'passport_number' => $request -> passpoertNumber,
            'name' => $request -> name,
            'email' => $request -> email,
            'phone' => $request -> phone,
            'address' => $request -> address,
            'applying_country' => $request -> applying_country,
            'agent_via' => $request -> agents,
            'amount' => $request -> payment,
            'photos' => $file_name,
        ]);

        $newPassportdata = [
            'passport_number' => $request -> passpoertNumber,
            'name' => $request -> name,
            'email' => $request -> email,
            'applying_country' => $request -> applying_country,
            'agent_via' => $request -> agents,
        ];


        $newPassport -> notify( new NewPassportNotification($newPassportdata));

        //send data to Accounts Table
        Accounts::create([
            'receiveFrom' => $request -> agents,
            'description' => $request -> passpoertNumber . $request -> visa_process,
            'due' => $request -> payment,
        ]);

        // Send confirmation email
        Mail::to($request->email)->send(new sendMail ([
            'name' => $request->name, // Pass any additional data you want to include in the email
            'passport_number' => $request -> passpoertNumber,
            'amount' => $request -> payment,
        ]));

    //redirect to back same page
    return redirect()->route('passports.index')->with('success', 'Data successfully inserted, and a confirmation email has been sent.');


    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {

        $image = NewPassport::findorfail($id);

        if (!$image) {
            abort(404);
        }

        $imageData = $image->image_data; // Replace with your actual column name for image data
        $mimeType = $image->mime_type; // Replace with your actual column name for MIME type

        $all_data = NewPassport::findorfail($id);
        return view('backend.passports.passportSingleView',[
            'passport_data' => $all_data
            ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $countries_data = countries::all();
        $agents = Agents::all();
        $edit_data = NewPassport::findorfail($id);
        return view('backend.passports.passportEditForm',[
            'edit_data' => $edit_data,
            'all_countries' => $countries_data,
            'all_agents' => $agents
        ]);



    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $update_data = NewPassport::findorfail($id);

        // data store to table

        $update_data -> update([
            'passport_number' => $request -> passpoertNumber,
            'name' => $request -> name,
            'email' => $request -> email,
            'phone' => $request -> phone,
            'address' => $request -> address,
            'applying_country' => $request -> applying_country,
            'agent_via' => $request -> agents,
            'amount' => $request -> payment,
        ]);

        return back() -> with('success','Data successfully update');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $delete_data = NewPassport::findorfail($id);
        $delete_data -> delete();
        return back() -> with('success','Data successfully inserted');
    }
}
