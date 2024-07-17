<?php

namespace App\Http\Controllers\AdminPages\Staff;

use App\Models\Staff;
use App\Models\Transection;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class StaffController extends Controller
{
    public function index()
    {
        $allStaff = Staff::where('trash',0)->where('status',1)->latest()->get();
        return view('admin.adminPages.staffManagement.index',[
            'allStaff'  => $allStaff,
            'form_type' => 'create'
        ]);
    }

    public function salaryStatement(Request $request)
    {
        $startDate = $request->startDate;
        $endDate = $request->endDate;
        $searchStaff = $request->staff;

        $allStaff = Staff::where('trash',0)->latest()->get();
        $allTransaction = Transection::latest()
            ->where('tresh','0')
            ->where('status','1')
            ->where('type','Salary to employees Expense');

        if (!empty($startDate) && !empty($endDate)) {
            $allTransaction->whereBetween('created_at', [$startDate, $endDate]);
        }
        if (!empty($searchStaff)) {
            $allTransaction->where('details', 'LIKE', '%' .$searchStaff.'%'  );
        }
        $allTransaction = $allTransaction->get();
        return view('admin.adminPages.officeManagement.salary',[
            'allTransaction' => $allTransaction,
            'startDate' => $startDate,
            'endDate' => $endDate,
            'allStaff' => $allStaff,
            'searchStaff' => $searchStaff,
        ]);
    }

    public function show(string $id)
    {
        $staff = Staff::findorfail($id);

        $staffName = $staff->name;

        $salaryStatement = Transection::where('details', 'LIKE', '%' . $staffName . '%')
                                ->Where('details', 'LIKE', '%salary%')
                                ->latest()
                                ->get();

        return view('admin.adminPages.staffManagement.salaryStatement',[
            'statement' => $salaryStatement,
            'staff'     => $staff
        ]);
    }

    public function store(Request $request)
    {
        //validate
        $this-> validate($request,[
            'name' => 'required',
            'cell' => 'required|unique:staff,cell',
        ]);

        Staff::create([
            'name'          => $request->name,
            'cell'          => $request->cell,
            'address'       => $request->address,
            'email'         => $request->email,
            'department'    => $request->department,
            'salary'        => $request->salary,
            'dob'           => $request->dob,
            'detail'        => $request->detail,
        ]);

        return back()->with('success','Your staff Data inserted');
    }

    public function edit(string $id)
    {
        $staff = Staff::findorfail($id);
        $allStaff = Staff::where('trash',0)->latest()->get();
        return view('admin.adminPages.staffManagement.index',[
            'allStaff'  => $allStaff,
            'staff'  => $staff,
            'form_type' => 'edit'
        ]);
    }

    public function update(Request $request, string $id)
    {
        $updated = Staff::findorfail();

        $updated->update([
            'name'          => $request->name,
            'cell'          => $request->cell,
            'address'       => $request->address,
            'email'         => $request->email,
            'department'    => $request->department,
            'salary'        => $request->salary,
            'dob'           => $request->dob,
            'detail'        => $request->detail,
        ]);

        return redirect()->route('staff.index')->with('warning','Your Staff Data updated');

    }


    public function trash(string $id)
    {
        $data =  Staff::findorFail($id);

        if($data -> trash){
            $data -> update([
                'trash'=>false
            ]);
        }else{
            $data -> update([
                'trash'=>true
            ]);
        }

        return back()->with('danger-table','Data Deleted successfull');
    }


}
