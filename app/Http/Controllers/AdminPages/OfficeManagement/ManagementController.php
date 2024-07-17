<?php

namespace App\Http\Controllers\AdminPages\OfficeManagement;


use App\Models\Transection;
use Illuminate\Http\Request;
use App\Models\TransactionType;
use App\Http\Controllers\Controller;

class ManagementController extends Controller
{
    public function expenses(Request $request)
    {
        $searchType = $request->type;
        $startDate = $request->start_date;
        $endDate = $request->end_date;

        $type = TransactionType::all();

        $expense = Transection::where('details', 'LIKE', '%Expense%');

        if (!empty($startDate) && !empty($endDate) && !empty($searchType)) {
            $expense = $expense->whereBetween('created_at', [$startDate, $endDate])
                ->where('type', $searchType)
                ->get();
        } elseif (!empty($startDate) && !empty($endDate) && empty($searchType)) {
            $expense = $expense->whereBetween('created_at', [$startDate, $endDate])
                ->get();
        } elseif (empty($startDate) && empty($endDate) && !empty($searchType)) {
            $expense = $expense->where('type', $searchType)
                ->get();
        } elseif (empty($startDate) && empty($endDate) && empty($searchType)) {
            $expense = $expense
                ->get();
        }
        $totalExpense = $expense->where('type', 'Like', '%Expenses%')->sum('credit');

        return view('admin.adminPages.officeManagement.expenses', [
            'expense' => $expense,
            'startDate' => $startDate,
            'endDate' => $endDate,
            'type' => $type,
            'searchType' => $searchType,
        ]);
    }

    public function revenue(Request $request)
    {
        $searchType = $request->type;
        $startDate = $request->start_date;
        $endDate = $request->end_date;

        $type = TransactionType::all();
        $transactionItems = Transection::latest()
            ->where('tresh', '0')
            ->where('status', '1');

        if (!empty($startDate) && !empty($endDate)) {
            $transactionItems = $transactionItems->whereBetween('created_at', [$startDate, $endDate]);
        }

        if ($searchType == 'revenue') {
            $transactionItems = $transactionItems->whereNotNull('debit');
        }

        $totalTransactionItems = $transactionItems->sum('debit');
        $transactionItems = $transactionItems->get();

        $financialMetrics = $this->getFinancialMetrics($startDate, $endDate);

        return view('admin.adminPages.officeManagement.revenue', [
            'transactionItems' => $transactionItems,
            'totalTransactionItems' => $totalTransactionItems,
            'startDate' => $startDate,
            'endDate' => $endDate,
            'type' => $type,
            'searchType' => $searchType,
            'financialMetrics' => $financialMetrics,
        ]);
    }

    public function getFinancialMetrics($startDate, $endDate)
    {
        $revenue = $this->getTotalByType('Revenue', $startDate, $endDate);

        $costOfWork = $this->getTotalByType('Cost of Services', $startDate, $endDate) +
            $this->getTotalByType('Cost of Visa Fees Expense', $startDate, $endDate) +
            $this->getTotalByType('BMET Fees Expense', $startDate, $endDate) +
            $this->getTotalByType('Company travel Expense', $startDate, $endDate);

        // Corrected calculation of costOfWork
        $costOfWork = Transection::whereIn('type', ['Cost of Services', 'Cost of Visa Fees Expense', 'BMET Fees Expense', 'Company travel Expense'])
            ->whereBetween('created_at', [$startDate, $endDate])
            ->sum('credit');

        $grossProfit = $revenue - $costOfWork;

        $costOfExpenses = Transection::where('type', 'Like', '%Expense%')
            ->where('type', '!=', $costOfWork)
            ->whereBetween('created_at', [$startDate, $endDate])
            ->sum('credit');

        $officeExpenses = Transection::where('type', 'like', '%Expense%')
            ->where('type', '!=', $costOfWork)
            ->whereBetween('created_at', [$startDate, $endDate])
            ->groupBy('type')
            ->selectRaw('type, SUM(credit) as total_credit')
            ->pluck('total_credit', 'type');

        $utilities = $this->getTotalByType('Utilities', $startDate, $endDate);
        $depreciation = $this->getTotalByType('Depreciation', $startDate, $endDate);

        $totalOperatingExpense = $costOfWork + $utilities + $depreciation;

        $interest = $this->getTotalByType('Interest', $startDate, $endDate);
        $taxes = $this->getTotalByType('Taxes', $startDate, $endDate);
        $netProfit = $grossProfit - ($totalOperatingExpense + $interest + $taxes);

        return [
            'revenue' => $revenue,
            'cost_of_work' => $costOfWork,
            'gross_profit' => $grossProfit,
            'utilities' => $utilities,
            'depreciation' => $depreciation,
            'total_operating_expense' => $totalOperatingExpense,
            'interest' => $interest,
            'costOfExpenses' => $costOfExpenses,
            'officeExpenses' => $officeExpenses,
            'taxes' => $taxes,
            'net_profit' => $netProfit,
        ];
    }

    protected function getTotalByType($type, $startDate, $endDate)
    {
        $result = Transection::where('type', 'LIKE', '%' . $type . '%')
            ->whereBetween('created_at', [$startDate, $endDate])
            ->selectRaw('SUM(CASE WHEN type = ? THEN debit ELSE - credit END) as total_amount', [$type])
            ->first();

        // Check if the result is not null before accessing total_amount
        return $result ? $result->total_amount : 0;
    }

    public function balanceSheet(Request $request)
    {
        $startDate = $request->start_date;
        $endDate = $request->end_date;

        $transactionType = TransactionType::all();
        $financialMetrics = $this->getFinancialMetrics($startDate, $endDate);

        return view('admin.adminPages.officeManagement.balanceSheet', [
            'startDate' => $startDate,
            'endDate' => $endDate,
            'transactionType' => $transactionType,
            'financialMetrics' => $financialMetrics,
        ]);
    }
}