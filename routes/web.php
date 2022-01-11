<?php

use App\Http\Controllers\accountinfoController;
use App\Http\Controllers\accountinformationController;
use App\Http\Controllers\dashboardController;
use App\Http\Controllers\dtrlogsController;
use App\Http\Controllers\employeesController;
use App\Http\Controllers\messagesController;
use App\Http\Controllers\payrollController;
use App\Http\Controllers\requestsController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\usersController;




Route::get('/login', function () {
    return view('login');
});


Route::get('/registration', function () {
    return view('registration');
});




Route::get('/login', [usersController::class,'login']);

Route::get('/registration', function () {
    return view('registration');
});

Route::get('/registration', [usersController::class,'registration']);


    






/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|







Route::get('/login', function () {
    return view('login');
});

Route::get('/dashboard', function () {
    return view('dashboard');
});

Route::get('/dtrlogs', function () {
    return view('dtrlogs');
});

Route::get('/employees', function () {
    return view('employees');
});

Route::get('/requests', function () {
    return view('requests');
});

// Route::get('/messages', function () {
//     return view('messages');
// });

Route::get('/payroll', function () {
    return view('payroll');
});

//Maangas

Route::get('/login', [loginController::class, 'index'])->name('login');

Route::get('/dashboard', [dashboardController::class, 'index'])->name('dashboard');

Route::get('/dtrlogs', [dtrlogsController::class, 'index'])->name('dtrlogs');

Route::get('/employees', [employeesController::class, 'index'])->name('employees');

Route::get('/requests', [requestsController::class, 'index'])->name('requests');

Route::get('/messages', [messagesController::class, 'index'])->name('messages');

Route::get('/payroll', [payrollController::class, 'index'])->name('payroll');

Route::get('/accountinformation', [accountinformationController::class, 'index'])->name('accountinformation');


*/
