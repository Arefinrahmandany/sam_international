<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AgentsController;
use App\Http\Controllers\InvoiceController;
use App\Http\Controllers\AccountsController;
use App\Http\Controllers\PassportController;
use App\Http\Controllers\VisaagencyController;
use App\Http\Controllers\TransectionController;
use App\Http\Controllers\VisasubmissionController;
use App\Http\Controllers\Visa_status_checkController;
use App\Http\Controllers\Medical_applicationController;
use App\Http\Controllers\PassporteligibilityController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


// Home route

//Route for Accounts

Route::get('/',[AccountsController::class, 'index']) -> name('accounts-home.index');
Route::get('accounts-create',[AccountsController::class, 'create']) -> name('Accounts.create');
Route::post('Accounts-payment-receive',[AccountsController::class, 'paymentstore']) -> name('Accounts.paymentstore');
Route::get('account-invoice-table',[AccountsController::class, 'table']) -> name('invoice-table.table');
Route::get('account-expense-sheet',[AccountsController::class, 'expense']) -> name('expen-sheet.expense');
Route::post('accounts-expense',[AccountsController::class, 'expenseCreate']) -> name('Accounts.expenseCreate');
Route::get('balance-sheet',[AccountsController::class, 'balancesheet']) -> name('balance-sheet.balancesheet');
Route::get('accounts-edit/{id}',[AccountsController::class, 'edit']) -> name('accounts-edit.edit');
Route::post('accounts-update/{id}',[AccountsController::class, 'update']) -> name('accounts-edit.update');
Route::get('accounts-entry-destroy/{id}',[AccountsController::class, 'destroy']) -> name('accounts-entry.destroy');
Route::get('accounts/receipt',[AccountsController::class, 'showReceipt']) -> name('accounts/receipt.showReceipt');





//Route for agents
Route::get('Agents',[AgentsController::class, 'index']) -> name('agent.index');
Route::get('AgentCretae',[AgentsController::class, 'create']) -> name('agent.create');
Route::post('Agent-store',[AgentsController::class, 'store']) -> name('agent.store');
Route::get('Agent-Show/{id}',[AgentsController::class, 'show']) -> name('agent.show');
Route::get('Agent-edit/{id}',[AgentsController::class, 'edit']) -> name('agent.edit');
Route::post('Agent-update/{id}',[AgentsController::class, 'update']) -> name('agent.update');
Route::get('Agent-destroy/{id}',[AgentsController::class, 'destroy']) -> name('agent.destroy');


//Route for Passports
Route::get('Passports',[PassportController::class, 'index'])->name('passports.index');
Route::get('passportCreate',[PassportController::class, 'create'])->name('passports.create');
Route::get('passport-show/{id}',[PassportController::class, 'show'])->name('passports.show');
Route::get('passport-Edit/{id}',[PassportController::class, 'edit'])->name('passports.edit');
Route::get('passportDelet/{id}',[PassportController::class, 'destroy'])->name('passports.destroy');
Route::post('passportupdate/{id}',[PassportController::class, 'update'])->name('passports.update');
Route::post('passportStore',[PassportController::class,'store'])->name('passports.store');

Route::get('/image/{id}', 'ImageController@show')->name('image.show');

//Route for Medical
Route::get('medical',[Medical_applicationController::class, 'index']) -> name('medical.index');
Route::get('medicalCreate',[Medical_applicationController::class, 'create']) -> name('medical.create');
Route::get('medical/{id}',[Medical_applicationController::class, 'show']) -> name('medical.show');
Route::get('medical/{id}',[Medical_applicationController::class, 'edit']) -> name('medical.edit');
Route::get('medical-destroy/{id}',[Medical_applicationController::class, 'destroy']) -> name('medical.destroy');
Route::post('medicalStore',[Medical_applicationController::class, 'store']) -> name('medical.store');

//Route for Visa-Application
Route::get('VisaApplication',[VisasubmissionController::class, 'index']) -> name('visa-application.index');
Route::get('VisaApplication-edit/{id}',[VisasubmissionController::class, 'edit']) -> name('visa-application.edit');
Route::get('VisaApplication-create',[VisasubmissionController::class, 'create']) -> name('visa-application.create');
Route::get('VisaApplication-show/{id}',[VisasubmissionController::class, 'show']) -> name('visa-application.show');
Route::get('VisaApplication-destroy/{id}',[VisasubmissionController::class, 'destroy']) -> name('visa-application.destroy');
Route::post('VisaApplication-store}',[VisasubmissionController::class, 'store']) -> name('visa-application.store');


//Route for Visa Status
Route::get('visa-status-show/{id}',[Visa_status_checkController::class, 'show']) -> name('visa-status.show');
Route::get('visa-status-edit/{id}',[Visa_status_checkController::class, 'edit']) -> name('visa-status.edit');
Route::get('visa-status',[Visa_status_checkController::class, 'index']) -> name('visa-status.index');
Route::get('visa-status-destroy/{id}',[Visa_status_checkController::class, 'destroy']) -> name('visa-status.destroy');
Route::post('visa-status-store/{id}',[Visa_status_checkController::class, 'store']) -> name('visa-status.store');
Route::get('visa-status-create',[Visa_status_checkController::class, 'create']) -> name('visa-status.create');


//Route for Passports Eligibility

Route::get('Eligibility',[PassporteligibilityController::class, 'index']) -> name('Eligibility.index');
Route::get('EligibilityCreate',[PassporteligibilityController::class, 'create']) -> name('Eligibility.create');
Route::get('Eligibility/{id}',[PassporteligibilityController::class, 'show']) -> name('Eligibility.show');
Route::get('Eligibility/{id}',[PassporteligibilityController::class, 'edit']) -> name('eligibility.edit');
Route::get('Eligibility-destroy/{id}',[PassporteligibilityController::class, 'destroy']) -> name('eligibility.destroy');
Route::post('EligibilityStore',[PassporteligibilityController::class, 'store']) -> name('Eligibility.store');




//Route for VisaAgency

Route::get('visa-agency',[VisaagencyController::class, 'index']) -> name('visa-agency.index');
Route::get('visa-agency-create',[VisaagencyController::class, 'create']) -> name('visa-agency.create');
Route::get('visa-agency-edit/{id}',[VisaagencyController::class, 'edit']) -> name('visa-agency.edit');
Route::get('visa-agency-show/{id}',[VisaagencyController::class, 'show']) -> name('visa-agency.show');
Route::get('visa-agency-destroy/{id}',[VisaagencyController::class, 'destroy']) -> name('visa-agency.destroy');
Route::post('visa-agency-store/{id}',[VisaagencyController::class, 'store']) -> name('visa-agency.store');






//Route for users

Route::get('sign_up', function () {
    return view('backend.sign_up');
});
Route::get('login', function () {
    return view('login');
});


