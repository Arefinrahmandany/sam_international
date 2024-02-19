<?php

namespace App\Http\Controllers\AdminPages\OfficeManagement;

use App\Models\Service;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ServiceController extends Controller
{
    public function index()
    {
        $service= Service::all();
        return view('admin.adminPages.officeManagement.service',[
            'service' => $service,
            'form_type' => 'create'
        ]);
    }

    public function store(Request $request)
    {
        Service::create([
            'service' => $request->service,
        ]);

        return back()->with('sucess','New service inserted successfully');
    }
}
