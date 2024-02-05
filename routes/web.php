<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\RolesController;
use App\Http\Controllers\Pages\PagesController;
use App\Http\Controllers\Admin\AdminAuthController;
use App\Http\Controllers\Admin\PermissionController;
use App\Http\Controllers\AdminPages\MedicalController;
use App\Http\Controllers\AdminPages\AgentsBdController;
use App\Http\Controllers\AdminPages\DashboardController;
use App\Http\Controllers\AdminPages\PassportsController;
use App\Http\Controllers\AdminPages\VisaOfficeController;
use App\Http\Controllers\AdminPages\TransectionController;
use App\Http\Controllers\AdminPages\VisaSubmissionController;
use App\Http\Controllers\AdminPages\VisaStatusCheckController;

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

Route::Post('/dashboard',[AdminAuthController::class, 'login'])->name('dashboard.login');


Route::group(['middleware' => 'admin.redirect'],function(){

    // Show Login Authentication with Redirection

    Route::get('/',[AdminAuthController::class, 'showloginForm']) -> name('admin.login.form');
    Route::post('/admin-login',[AdminAuthController::class, 'login']) -> name('admin.login');

});




Route::group(['middleware' => 'admin'],function(){

    //Route For Admin Users after login
    Route::resource('/users',AdminController::class);


    Route::get('/users-status-update/{id}',[AdminController::class, 'updateStatus'])->name('users.status.update');
    Route::get('/users-tresh-update/{id}',[AdminController::class, 'updateTresh'])->name('users.tresh.update');

    //Route For Admin Users role
    Route::resource('/user-role',RolesController::class);

    //Route For Admin Users permission
    Route::resource('/user-permission',PermissionController::class);

    //Route For Admin Users after login
    Route::resource('/passports',PassportsController::class);

    Route::get('/passports-tresh-update/{id}',[PassportsController::class, 'updateTresh'])->name('passports.tresh.update');


    Route::resource('/agentsBd',AgentsBdController::class);

    Route::get('/agentsBd-tresh-update/{id}',[AgentsBdController::class, 'updateTresh'])->name('agentsBd.tresh.update');

    //Route For dashboard after login

    Route::resource('/dashboard',DashboardController::class);



    Route::resource('/accounting',TransectionController::class);

    //Route For Medical
    Route::resource('/medical',MedicalController::class);

    Route::get('/medical-tresh-update/{id}',[MedicalController::class, 'updateTresh'])->name('medical.tresh.update');

    //Route For Visa Submission
    Route::resource('/visaSubmission',VisaSubmissionController::class);

    Route::get('/visaSubmission-tresh-update/{id}',[VisaSubmissionController::class, 'updateTresh'])->name('VisaSubmission.tresh.update');

    //Route For Visa Status Check
    Route::resource('/visaStatusCheck',VisaStatusCheckController::class);

    Route::get('/visaStatusCheck-tresh-update/{id}',[VisaStatusCheckController::class, 'updateTresh'])->name('VisaSubmission.tresh.update');

    //Route For Visa Status Check
    Route::resource('/visaoffice',VisaOfficeController::class);


//All Templet pages

Route::get('/element-index',[PagesController::class, 'element'])->name('elements.index');
Route::get('/element-button',[PagesController::class, 'button'])->name('elements.button');
Route::get('/element-error404',[PagesController::class, 'error404'])->name('elements.error404');
Route::get('/element-blank',[PagesController::class, 'blank'])->name('elements.blank');
Route::get('/element-chart',[PagesController::class, 'chart'])->name('elements.chart');
Route::get('/element-form',[PagesController::class, 'form'])->name('elements.form');
Route::get('/element-signup',[PagesController::class, 'signup'])->name('elements.signup');
Route::get('/element-table',[PagesController::class, 'table'])->name('elements.table');
Route::get('/element-typography',[PagesController::class, 'typography'])->name('elements.typography');
Route::get('/element-widget',[PagesController::class, 'widget'])->name('elements.widget');


});



