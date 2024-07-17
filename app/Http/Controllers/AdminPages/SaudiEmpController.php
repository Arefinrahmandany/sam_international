<?php

namespace App\Http\Controllers\AdminPages;

use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Models\Passports_new;
use App\Models\SaudiaSponserChart;
use App\Http\Controllers\Controller;
use App\Models\Passports;
use Illuminate\Support\Facades\Auth;
use Stichoza\GoogleTranslate\GoogleTranslate;

class SaudiEmpController extends Controller
{
    public function index()
    {
        $passports_new=Passports::latest()->where('trash','0')->where('applying_country','Saudi Arabia')->get();
        return view('admin.adminPages.saudi_Arabia.index',[
            'passports_data'=> $passports_new
        ]);
    }

    public function employmentContract(string $id)
    {
        $passports_new = Passports::findorfail($id);
        return view('admin.adminPages.saudi_Arabia.employment_contract',[
            'data'=> $passports_new
        ]);
    }
    public function ksaEmbassyFrom(string $id)
    {
        $passports_new=Passports::findorfail($id);
        return view('admin.adminPages.saudi_Arabia.ksa_visa_embassy_app_from',[
            'data'=> $passports_new
        ]);
    }
    public function linkUpEmbassy(string $id)
    {
        $passports_new=Passports::findorfail($id);
        return view('admin.adminPages.saudi_Arabia.link_up_embassy',[
            'data'=> $passports_new
        ]);
    }
    public function sponser(string $id)
    {
        $tr = new GoogleTranslate('en', 'ar'); // Translates from English to Arabic
        $today = Carbon::today()->format('d.m.Y');
        $sponserList = SaudiaSponserChart::where('user_id',$id)->get();
        $sponserListTotal = SaudiaSponserChart::where('user_id',$id)->count();
        $passportNumbers = $sponserList->pluck('passport_number')->toArray();
        $passports=Passports::whereIn('passport',$passportNumbers)->get();
        return view('admin.adminPages.saudi_Arabia.sponser',[
            'data'=> $passports,
            'sponserListTotal'=> $sponserListTotal,
            'today' => $today,
            'tr' => $tr,
        ]);
    }

    public function sponserStore(Request $request, string $id)
    {
        $passport_info = Passports::findorfail($id);
        $passport = $passport_info->passport;
        $user_id = Auth::guard('admin')->user()->id;

        SaudiaSponserChart::create([
            'passport_number' => $passport,
            'user_id' => $user_id,
        ]);

        return back()->with('success-table','Sponser Add Successfully');
    }
    public function sponserDestroy(string $id)
    {
        SaudiaSponserChart::where('user_id', $id)->delete();

        return redirect()->route('saudiEmp.index')->with('success-table','Sponser Printed Successfully');
    }



    public function ksavisaapp(string $id)
    {
        $passports_new=Passports::findorfail($id);
        return view('admin.adminPages.saudi_Arabia.ksa_visa_app_from',[
            'data'=> $passports_new
        ]);
    }
}
