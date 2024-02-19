<?php

namespace App\Http\Controllers\AdminPages\ManPower;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Passports_new;

class PassportDeliveryController extends Controller
{
    public function index()
    {
        $all_passports = Passports_new::where('bmet_status','pass')->get();
        return view('admin.adminPages.delivery.index',[
            'all_passports' => $all_passports
        ]);
    }

    public function deliver(Request $request, string $id)
    {
        $updateData = Passports_new::findorfail($id);

        $updateData->update([
            'passportStatus' => 'delivered',
        ]);

        //redirect to back same page
        return back() -> with('success-table','Data successfully Updated');
    }


}
