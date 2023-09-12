<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AgentsController;
use App\Http\Controllers\AccountController;
use App\Http\Controllers\PassportController;
use App\Http\Controllers\VisaagencyController;
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

Route::get('Agents',[AgentsController::class, 'index']) -> name('agent.index');
Route::get('AgentCretae',[AgentsController::class, 'create']) -> name('agent.create');
Route::get('Agent-show/{id}',[AgentsController::class, 'show']) -> name('agent-show.show');
Route::get('Agent-edit/{id}',[AgentsController::class, 'edit']) -> name('agent.edit');
Route::post('Agent-store',[AgentsController::class, 'store']) -> name('agent.store');
Route::get('Passports',[PassportController::class, 'index'])->name('passports.index');
Route::get('passportCreate',[PassportController::class, 'create'])->name('passports.create');
Route::get('passportshow',[PassportController::class, 'show'])->name('passports.show');
Route::get('passportEdit',[PassportController::class, 'edit'])->name('passports.edit');
Route::post('passportStore',[PassportController::class,'store'])->name('passports.store');
Route::get('medical',[Medical_applicationController::class, 'index']) -> name('medical.index');
Route::get('medicalCreate',[Medical_applicationController::class, 'create']) -> name('medical.create');
Route::get('medical/{id}',[Medical_applicationController::class, 'show']) -> name('medical.show');
Route::get('medical/{id}',[Medical_applicationController::class, 'edit']) -> name('medical.edit');
Route::post('medicalStore',[Medical_applicationController::class, 'store']) -> name('medical.store');
Route::get('Visa-Application',[VisasubmissionController::class, 'index']) -> name('Visa-Application.index');
Route::get('Visa-Application/{id}',[VisasubmissionController::class, 'edit']) -> name('Visa-Application.edit');
Route::get('Visa-Application/Create',[VisasubmissionController::class, 'create']) -> name('Visa-Application.create');
Route::get('Visa-Application/{id}',[VisasubmissionController::class, 'show']) -> name('Visa-Application.show');
Route::post('Visa-Application-store}',[VisasubmissionController::class, 'store']) -> name('Visa-Application.store');
Route::get('VisaStatus/create',[Visa_status_checkController::class, 'create']) -> name('VisaStatus.create');
Route::get('VisaStatus/{id}',[Visa_status_checkController::class, 'show']) -> name('VisaStatus.show');
Route::get('VisaStatus/{id}',[Visa_status_checkController::class, 'edit']) -> name('VisaStatus.edit');
Route::get('VisaStatus',[Visa_status_checkController::class, 'index']) -> name('VisaStatus.index');
Route::post('VisaStatus-store',[Visa_status_checkController::class, 'store']) -> name('VisaStatus.store');
Route::get('Eligibility',[PassporteligibilityController::class, 'index']) -> name('Eligibility.index');
Route::get('EligibilityCreate',[PassporteligibilityController::class, 'create']) -> name('Eligibility.create');
Route::get('Eligibility/{id}',[PassporteligibilityController::class, 'show']) -> name('Eligibility.show');
Route::get('Eligibility/{id}',[PassporteligibilityController::class, 'edit']) -> name('Eligibility.edit');
Route::post('EligibilityStore',[PassporteligibilityController::class, 'store']) -> name('Eligibility.store');
Route::get('VisaAgency',[VisaagencyController::class, 'index']) -> name('VisaAgency.index');
Route::get('VisaAgency/create',[VisaagencyController::class, 'create']) -> name('VisaAgency.create');
Route::get('VisaAgency/{id}',[VisaagencyController::class, 'edit']) -> name('VisaAgency.edit');
Route::get('VisaAgency/{id}',[VisaagencyController::class, 'show']) -> name('VisaAgency.show');
Route::post('VisaAgency-store',[VisaagencyController::class, 'store']) -> name('VisaAgency.store');
Route::get('Accounts',[AccountController::class, 'index']) -> name('Accounts.index');
Route::post('Accounts-store',[AccountController::class, 'store']) -> name('Accounts.store');


Route::get('sign_up', function () {
    return view('backend.sign_up');
});
Route::get('login', function () {
    return view('login');
});
