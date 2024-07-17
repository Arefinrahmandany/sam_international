<?php

namespace App\Http\Controllers\AdminPages;

use App\Models\BMET;
use App\Models\Passports;
use App\Models\Transection;
use App\Models\TravelAgency;
use Illuminate\Support\Carbon;
use App\Http\Controllers\Controller;
use App\Http\Controllers\AdminPages\OfficeManagement\ManagementController;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       // Get the current date
        $currentDate = Carbon::now();

        // Set the start date to the first day of the current month
        $startDate = $currentDate->firstOfMonth()->toDateString();

        // Set the end date to the last day of the current month
        $endDate = $currentDate->endOfMonth()->toDateString();

        $passport_receive = Passports::whereDate('created_at', $currentDate)->count();

        $monthlyExpenses = Transection::whereBetween('created_at', [$startDate, $endDate])
                    ->where('type', 'LIKE', '%Expense%')
                    ->sum('credit');

        $bmet_pass = BMET::where('bmet_status', 'pass')
                    ->where('status', 1)
                    ->whereDate('updated_at', $currentDate)
                    ->count();

        $bmet_reject = BMET::whereDate('updated_at', $currentDate)->where('bmet_status','rejected')->count();

        $dayTicketSaleTotal = TravelAgency::whereDate('created_at', $currentDate)
                ->sum('total_sale_price');

        $dayTicketSaleQty = TravelAgency::whereDate('created_at', $currentDate)
                ->sum('qty');

        // Create an instance of ManagementController
        $managementController = new ManagementController();

        // Call the public method to get financial metrics
        $financialMetrics = $managementController->getFinancialMetrics($startDate, $endDate);

        // Get all passports
        $passports = Passports::latest()->get();

        return view('admin.index', [
            'bmet_pass' => $bmet_pass,
            'bmet_reject' => $bmet_reject,
            'passport_receive' => $passport_receive,
            'passports' => $passports,
            'dayTicketSaleTotal' => $dayTicketSaleTotal,
            'dayTicketSaleQty' => $dayTicketSaleQty,
            'monthlyExpenses' => $monthlyExpenses,
            'financialMetrics' => $financialMetrics, // Add financial metrics to the view
        ]);
    }

    public function getFinancialMetricsPublic($startDate, $endDate)
    {
        return $this->getFinancialMetrics($startDate, $endDate);
    }

}
