<?php

namespace App\Http\Controllers\AdminPages\OfficeManagement;

use Carbon\Carbon;
use App\Models\Transection;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Controller;

class ManagementController extends Controller
{
    public function expenses(Request $request)
    {
        $searchTerm = $request->search;
        $startDate = $request->start_date; // Use separate variable for start date
        $endDate = $request->end_date; // Use separate variable for end date

        $expense = Transection::where('details', 'LIKE', '%expense%')
            ->orWhere('details', 'LIKE', '%salary%')
            ->get();

        if (!empty($startDate) && !empty($endDate) && !empty($searchTerm)) {
            $expense->where(function ($query) use ($searchTerm, $startDate, $endDate) {
                $query->where('details', 'LIKE', '%' . $searchTerm . '%')
                    ->whereBetween('created_at', [$startDate, $endDate]);
            });
        } elseif (empty($searchTerm)) {
            $expense = $expense->sortByDesc('created_at');
        }

        return view('admin.adminPages.officeManagement.expenses', [
            'expense' => $expense,
            'startDate' => $startDate,
            'endDate' => $endDate,
        ]);
    }
}
