<?php

namespace App\Jobs;

use Carbon\Carbon;
use App\Models\Staff;
use App\Models\Salary;
use App\Models\Transection;
use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Contracts\Queue\ShouldBeUnique;

class MonthlySalaryJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     */
    public function handle()
    {
        // Get all staff members
        $staffMembers = Staff::all();

        foreach ($staffMembers as $staff) {
            // Create a salary record for each staff member at the end of the month
            $salaryRecord = Salary::create([
                'staff_id' => $staff->id,
                'amount' => $staff->salary,
                'month' => Carbon::now()->endOfMonth(),
            ]);

            // Create a Transection record for the salary payment
            Transection::create([
                'voucherNo' => $this->generateUniqueVoucherNo(), // You need to implement this method
                'details' => "Salary Payment Due {$staff->name}, Month: {$salaryRecord->month}",
                'debit' => $staff->salary,
                'paymentSystem' => 'cash', // You may adjust this based on your payment system
                'user_id' => auth()->guard('admin')->id(), // Assuming you want to store the admin user who processed the payment
            ]);
        }
    }

    // Implement a method to generate a unique voucher number
    private function generateUniqueVoucherNo()
    {
        // Your implementation here to generate a unique voucher number
        // This could be a combination of a prefix, date, and a unique identifier
        return 'V' . now()->format('YmdHis') . uniqid();
    }

    // In your controller method
public function generateMonthlySalaries()
{
    MonthlySalaryJob::dispatch();

    return redirect()->back()->with('success', 'Monthly salaries generation initiated.');
}


}
