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


Route::get('/', function () {
    return view('backend.accounts.accounts');
});

Route::get('home', function () {
    return view('backend.home');
});

//Route for agents
Route::get('Agents',[AgentsController::class, 'index']) -> name('agent.index');
Route::get('AgentCretae',[AgentsController::class, 'create']) -> name('agent.create');
Route::get('Agent-Show/{id}',[AgentsController::class, 'show']) -> name('agent.show');
Route::get('Agent-edit/{id}',[AgentsController::class, 'edit']) -> name('agent.edit');
Route::post('Agent-store',[AgentsController::class, 'store']) -> name('agent.store');
Route::get('Agent-destroy/{id}',[AgentsController::class, 'destroy']) -> name('agent.destroy');
Route::post('Agent-update/{id}',[AgentsController::class, 'update']) -> name('agent.update');

//Route for Passports
Route::get('Passports',[PassportController::class, 'index'])->name('passports.index');
Route::get('passportCreate',[PassportController::class, 'create'])->name('passports.create');
Route::get('passport-show/{id}',[PassportController::class, 'show'])->name('passports.show');
Route::get('passport-Edit/{id}',[PassportController::class, 'edit'])->name('passports.edit');
Route::get('passportDelet/{id}',[PassportController::class, 'destroy'])->name('passports.destroy');
Route::post('passportupdate/{id}',[PassportController::class, 'update'])->name('passports.update');
Route::post('passportStore',[PassportController::class,'store'])->name('passports.store');

//Route for Medical
Route::get('medical',[Medical_applicationController::class, 'index']) -> name('medical.index');
Route::get('medicalCreate',[Medical_applicationController::class, 'create']) -> name('medical.create');
Route::get('medical/{id}',[Medical_applicationController::class, 'show']) -> name('medical.show');
Route::get('medical/{id}',[Medical_applicationController::class, 'edit']) -> name('medical.edit');
Route::get('medical-destroy/{id}',[Medical_applicationController::class, 'destroy']) -> name('medical.destroy');
Route::post('medicalStore',[Medical_applicationController::class, 'store']) -> name('medical.store');

//Route for Visa-Application
Route::get('Visa-Application',[VisasubmissionController::class, 'index']) -> name('Visa-Application.index');
Route::get('Visa-Application/{id}',[VisasubmissionController::class, 'edit']) -> name('Visa-Application.edit');
Route::get('VisaApplicationCreate',[VisasubmissionController::class, 'create']) -> name('VisaApplication.create');
Route::get('Visa-Application/{id}',[VisasubmissionController::class, 'show']) -> name('Visa-Application.show');
Route::get('VisaApplication-destroy/{id}',[VisasubmissionController::class, 'destroy']) -> name('Visa-Application.destroy');
Route::post('VisaApplicationstore}',[VisasubmissionController::class, 'store']) -> name('VisaApplication.store');
Route::get('VisaStatus/create',[Visa_status_checkController::class, 'create']) -> name('VisaStatus.create');


//Route for Visa Status
Route::get('VisaStatusShow',[Visa_status_checkController::class, 'show']) -> name('VisaStatus.show');
Route::get('VisaStatusEdit',[Visa_status_checkController::class, 'edit']) -> name('VisaStatus.edit');
Route::get('VisaStatus',[Visa_status_checkController::class, 'index']) -> name('VisaStatus.index');
Route::get('VisaStatus-destroy/{id}',[Visa_status_checkController::class, 'destroy']) -> name('VisaStatus.destroy');
Route::post('VisaStatusStore',[Visa_status_checkController::class, 'store']) -> name('VisaStatus.store');
Route::get('VisaStatusCreate',[Visa_status_checkController::class, 'create']) -> name('VisaStatus.create');


//Route for Passports Eligibility

Route::get('Eligibility',[PassporteligibilityController::class, 'index']) -> name('Eligibility.index');
Route::get('EligibilityCreate',[PassporteligibilityController::class, 'create']) -> name('Eligibility.create');
Route::get('Eligibility/{id}',[PassporteligibilityController::class, 'show']) -> name('Eligibility.show');
Route::get('Eligibility/{id}',[PassporteligibilityController::class, 'edit']) -> name('Eligibility.edit');
Route::get('Eligibility-destroy/{id}',[PassporteligibilityController::class, 'destroy']) -> name('Eligibility.destroy');
Route::post('EligibilityStore',[PassporteligibilityController::class, 'store']) -> name('Eligibility.store');




//Route for VisaAgency

Route::get('VisaAgency',[VisaagencyController::class, 'index']) -> name('VisaAgency.index');
Route::get('VisaAgencyCreate',[VisaagencyController::class, 'create']) -> name('VisaAgency.create');
Route::get('VisaAgency/{id}',[VisaagencyController::class, 'edit']) -> name('VisaAgency.edit');
Route::get('VisaAgency/{id}',[VisaagencyController::class, 'show']) -> name('VisaAgency.show');
Route::get('VisaAgency-destroy/{id}',[VisaagencyController::class, 'destroy']) -> name('VisaAgency.destroy');
Route::post('VisaAgency-store',[VisaagencyController::class, 'store']) -> name('VisaAgency.store');


//Route for Accounts

Route::get('Accounts',[AccountsController::class, 'index']) -> name('Accounts.index');
Route::get('Accounts-Create',[AccountsController::class, 'create']) -> name('Accounts.create');
Route::get('Accounts-show/{}',[AccountsController::class, 'show']) -> name('Accounts.show');
Route::post('Accounts-Store',[AccountsController::class, 'store']) -> name('Accounts.store');
Route::post('Accounts-expenseStore',[AccountsController::class, 'expenseStore']) -> name('Accounts.expenseStore');
Route::get('Accounts-invoiceStore',[AccountsController::class, 'invoice']) -> name('Accounts.invoice');
Route::get('ExpenseSheet',[AccountsController::class, 'expense']) -> name('ExpenseSheet.Expense');
Route::get('AccountsInvoiceStore-destroy/{id}',[AccountsController::class, 'destroy']) -> name('Accounts.destroy');
Route::get('BalanceSheet',[TransectionController::class, 'index']) -> name('BalanceSheet.index');




//Route for users

Route::get('sign_up', function () {
    return view('backend.sign_up');
});
Route::get('login', function () {
    return view('login');
});
