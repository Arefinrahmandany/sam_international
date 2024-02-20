<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\RolesController;
use App\Http\Controllers\Pages\PagesController;
use App\Http\Controllers\front\FrontEndController;
use App\Http\Controllers\Admin\AdminAuthController;
use App\Http\Controllers\Admin\PermissionController;
use App\Http\Controllers\AdminPages\AgentController;
use App\Http\Controllers\AdminPages\MedicalController;
use App\Http\Controllers\AdminPages\AgentsBdController;
use App\Http\Controllers\AdminPages\SaudiEmpController;
use App\Http\Controllers\AdminPages\BMET\BMETController;
use App\Http\Controllers\AdminPages\DashboardController;
use App\Http\Controllers\AdminPages\PassportsController;
use App\Http\Controllers\AdminPages\VisaOfficeController;
use App\Http\Controllers\AdminPages\Staff\StaffController;
use App\Http\Controllers\AdminPages\TransectionController;
use App\Http\Controllers\AdminPages\ManPower\MofaController;
use App\Http\Controllers\AdminPages\VisaSubmissionController;
use App\Http\Controllers\AdminPages\Accounting\BankController;
use App\Http\Controllers\AdminPages\VisaStatusCheckController;
use App\Http\Controllers\AdminPages\passportEligibleController;
use App\Http\Controllers\AdminPages\Travel\AirTicketController;
use App\Http\Controllers\AdminPages\ManPower\ManpowerController;
use App\Http\Controllers\AdminPages\Visaprocess\OkalaController;
use App\Http\Controllers\AdminPages\ManPower\KsaProcessController;
use App\Http\Controllers\AdminPages\Visaprocess\EmbassyController;
use App\Http\Controllers\AdminPages\ManPower\PassportReturnController;
use App\Http\Controllers\AdminPages\OfficeManagement\ServiceController;
use App\Http\Controllers\AdminPages\ManPower\PassportDeliveryController;
use App\Http\Controllers\AdminPages\OfficeManagement\ManagementController;

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

Route::get('/',[FrontEndController::class, 'index']) -> name('home.index');

Route::group(['middleware' => 'admin.redirect'],function(){

    // Show Login Authentication with Redirection

    Route::get('/login-form',[AdminAuthController::class, 'showloginForm']) -> name('admin.login.form');
    Route::post('/admin-login',[AdminAuthController::class, 'login']) -> name('admin.login');

});




Route::group(['middleware' => 'admin'],function(){

    Route::Post('/dashboard',[AdminAuthController::class, 'login'])->name('dashboard.login');
    Route::get('/dashboard-logout',[AdminAuthController::class, 'logout'])->name('dashboard.logout');

    //Route For Admin Users after login
    Route::resource('/users',AdminController::class);

    Route::get('/users-status-update/{id}',[AdminController::class, 'updateStatus'])->name('users.status.update');
    Route::get('/users-tresh-update/{id}',[AdminController::class, 'updateTresh'])->name('users.tresh.update');

    Route::get('/users-EditForm/{id}',[AdminController::class, 'userEditForm'])->name('users.EditForm');
    Route::PUT('/users-userupdate/{id}',[AdminController::class, 'userupdate'])->name('users.userupdate');

    Route::get('/users-passwordChangeForm/{id}',[AdminController::class, 'passwordChangeForm'])->name('users.passwordChangeForm');
    Route::PUT('/users-passwordChange',[AdminController::class, 'passwordChange'])->name('users.passwordChange');

    //Route For Admin Users role
    Route::resource('/user-role',RolesController::class);

    Route::resource('/staff',StaffController::class);
    Route::get('/staff-trash/{id}',[StaffController::class, 'trash'])->name('staff.trash');


    Route::post('/office-expenses',[ManagementController::class, 'expenses'])->name('office.expenses');

    //Route For Admin Users permission
    Route::resource('/user-permission',PermissionController::class);

    //Route For Admin Users after login
    Route::resource('/passports',PassportsController::class);
    Route::put('/passports-amount-update/{id}',[PassportsController::class, 'amount'])->name('passports.amount');
    Route::get('/passports-tresh-update/{id}',[PassportsController::class, 'updateTresh'])->name('passports.tresh.update');
    Route::put('/passports-amountUpdate/{id}',[PassportsController::class, 'amountUpdate'])->name('passports.amountUpdate');

    Route::resource('/agentsBd',AgentsBdController::class);
    Route::get('/agentsBd-tresh-update/{id}',[AgentsBdController::class, 'updateTresh'])->name('agentsBd.tresh.update');

    //Route For dashboard after login

    Route::resource('/dashboard',DashboardController::class);


    Route::resource('/transection',TransectionController::class);
    Route::get('/transection-pettyCash',[TransectionController::class, 'pettyCash'])->name('transection.pettyCash');
    Route::get('/transection-recycle',[TransectionController::class, 'recycle'])->name('transection.recycle');
    Route::get('/transection-transectionTresh/{id}',[TransectionController::class, 'transectionTresh'])->name('transection.TransectionTresh');
    Route::post('/transection-dailyStatement',[TransectionController::class, 'dailyStatement'])->name('transection.dailyStatement');

    Route::resource('/bank',BankController::class);
    Route::get('/bank-trash/{id}',[BankController::class, 'trash'])->name('bank.trash');

    Route::resource('/service',ServiceController::class);


    Route::resource('/agentsTransaction',AgentController::class);
    Route::POST('/agentsTransaction-trash/{id}',[AgentController::class, 'trash'])->name('agentsTransaction.trash');

    //Route For Man Power
    Route::resource('/manpower',ManpowerController::class);
    Route::get('/manpower-create',[ManpowerController::class, 'rlcreate'])->name('manpower.rlcreate');
    Route::post('/manpower-rlstore',[ManpowerController::class, 'rlstore'])->name('manpower.rlstore');
    Route::get('/manpower-rledit',[ManpowerController::class, 'rledit'])->name('manpower.rledit');
    Route::post('/manpower-rlupdate',[ManpowerController::class, 'rlupdate'])->name('manpower.rlupdate');
    Route::PUT('/manpower-status/{id}',[ManpowerController::class, 'statusUpdate'])->name('manpower.status');
    Route::put('/manpower-Reject/{id}',[ManpowerController::class, 'statusReject'])->name('manpower.statusReject');

    Route::resource('/bmet',BMETController::class);
    Route::get('/bmet-Reject',[BMETController::class, 'passportRejected'])->name('bmet.passportRejected');
    Route::get('/bmet-return/{id}',[BMETController::class, 'passportReturn'])->name('bmet.passportReturn');

    Route::resource('/passportDelivery',PassportDeliveryController::class);
    Route::PUT('/passportDelivery/{id}',[PassportDeliveryController::class, 'deliver'])->name('passport.deliver');

    Route::resource('/passportReturn',PassportReturnController::class);

    //Route For Medical
    Route::resource('/medical',MedicalController::class);


    Route::resource('/ksaProcess',KsaProcessController::class);

    //Route For embassy
    Route::resource('/embassy',EmbassyController::class);
    Route::PUT('/embassy-update/{id}',[EmbassyController::class, 'update'])->name('embassy.update');
    //Route For mofa
    Route::resource('/mofa',MofaController::class);
    //Route For okala
    Route::resource('/okala',OkalaController::class);

    //Trave Agency Route
    Route::resource('/airTicket',AirTicketController::class);

    Route::get('/medical-report/{id}',[MedicalController::class, 'medicalReportEdit'])->name('medical.reportEdit');

    //Route For Visa Submission
    Route::resource('/visaSubmission',VisaSubmissionController::class);
    Route::get('/visaSubmission-tresh-update/{id}',[VisaSubmissionController::class, 'updateTresh'])->name('visaSubmission.tresh.update');

    //Route For Visa Status Check
    Route::resource('/visaStatusCheck',VisaStatusCheckController::class);
    Route::get('/visaStatusCheck-tresh-update/{id}',[VisaStatusCheckController::class, 'updateTresh'])->name('visaStatusCheck.tresh.update');

    //Route For Visa Status Check
    Route::resource('/visaoffice',VisaOfficeController::class);

    //Route For Visa Status Check
    Route::resource('/passportEligible',passportEligibleController::class);
    Route::get('/passportEligible-tresh-update/{id}',[passportEligibleController::class, 'updateTresh'])->name('passportEligible.tresh.update');


    Route::get('/saudiEmp',[SaudiEmpController::class, 'index'])->name('saudiEmp.index');
    Route::get('/saudiEmp-employment_contract/{id}',[SaudiEmpController::class, 'employmentContract'])->name('saudiEmp.employmentContract');
    Route::get('/saudiEmp-ksa_visa/{id}',[SaudiEmpController::class, 'ksaEmbassyFrom'])->name('saudiEmp.ksaVisa');
    Route::get('/saudiEmp-link_up/{id}',[SaudiEmpController::class, 'linkUpEmbassy'])->name('saudiEmp.linkUp');
    Route::get('/saudiEmp-sponser/{id}',[SaudiEmpController::class, 'sponser'])->name('saudiEmp.sponser');
    Route::get('/saudiEmp-ksavisaapp/{id}',[SaudiEmpController::class, 'ksavisaapp'])->name('saudiEmp.ksavisaapp');

    Route::get('/saudiEmp-sponserStore/{id}',[SaudiEmpController::class, 'sponserStore'])->name('saudiEmp.sponserStore');
    Route::get('/saudiEmp-sponserDestroy/{id}',[SaudiEmpController::class, 'sponserDestroy'])->name('saudiEmp.sponserDestroy');

//All Templet pages

Route::get('/element-error404',[PagesController::class, 'error404'])->name('elements.error404');
Route::get('/element-blank',[PagesController::class, 'blank'])->name('elements.blank');
Route::get('/element-signup',[PagesController::class, 'signup'])->name('elements.signup');


});
