<?php


use App\Http\Controllers\accountinfoController;
use App\Http\Controllers\accountinformationController;
use App\Http\Controllers\archiveController;
use App\Http\Controllers\changepasswordController;
use App\Http\Controllers\dashboardController;
use App\Http\Controllers\dtrlogsController;
use App\Http\Controllers\dtrtimeController;
use App\Http\Controllers\employee1Controller;
use App\Http\Controllers\employeesController;
use App\Http\Controllers\messagesController;
use App\Http\Controllers\payrollController;
use App\Http\Controllers\requestsController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\usersController;
use App\Http\Controllers\loginController;
use App\Http\Controllers\qrscannerController;
use App\Http\Controllers\salarymanagerController;
use App\Http\Controllers\timeoutController;
use App\Models\employees;
use Illuminate\Support\Facades\Auth;
Auth::routes();

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|

*/

Route::get('hr_dashboard', [loginController::class, 'HRSignedIn'])->name('hr_dashboard')->middleware('HRCheck');

Route::get('/dtrlogs', [dtrlogsController::class, 'index'])->name('dtrlogs');

Route::get('/employees', [employeesController::class, 'index'])->name('employees')->middleware('HRCheck');

Route::get('/movetoarchive{id}', [employeesController::class, 'MovetoArchive'])->name('movetoarchive');

Route::get('edituser{id}', [employeesController::class, 'EditUser'])->name('edituser');

Route::put('updateuser/{id}', [employeesController::class, 'UpdateUser'])->name('updateuser');

Route::get('/archive', [archiveController::class, 'index'])->name('archive');

Route::get('getjoblevels', [employeesController::class, 'getLevel'])->name('getLevel'); 

Route::get('getjobpositions', [employeesController::class, 'getPosition'])->name('getPosition');

Route::get('/requests', [requestsController::class, 'index'])->name('requests');

Route::get('/messages', [messagesController::class, 'index'])->name('messages');

Route::get('/payroll', [payrollController::class, 'index'])->name('payroll');

Route::get('/login', [loginController::class, 'login'])->name('login')->middleware('LoggedIN');

Route::post('/login-user', [loginController::class, 'loginchecker'])->name('login-checker');

Route::get('/logout', [loginController::class, 'logout'])->name('logout');

Route::get('/registration', [employeesController::class, 'registration']);
    
Route::post('/register-user', [employeesController::class, 'checker'])->name('register-user');

Route::post('/register-user', [employeesController::class, 'RegisterUser'])->name('register-user');

Route::get('/salary_manager', [salarymanagerController::class, 'index'])->name('salary_manager');

Route::post('/add-job', [salarymanagerController::class, 'addnewposition'])->name('add-job');

Route::get('/change_password', [changepasswordController::class, 'index'])->name('change_password');

Route::get('/dtrtime', [dtrtimeController::class, 'index'])->name('dtrtime');

Route::get('/qrscanner', [qrscannerController::class, 'index'])->name('qrscanner');

Route::post('/attendancecheck', [qrscannerController::class, 'attendance'])->name('attendancecheck');

Route::get('/timeout', [timeoutController::class, 'index'])->name('timeout');

Route::get('/employee1', [employee1Controller::class, 'index'])->name('employee1');

