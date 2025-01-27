<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Admin\Adminlogincontroller;
use App\Http\Controllers\Admin\Adminhomecontroller;
use App\Http\Controllers\Auth\Patient\PatientController;
use App\Http\Controllers\PatientDetailController;

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/admin/login', function () {
//     return view('admin.auth.login');
// });

Route::prefix('admin')->group(function () {
Route::get('login', [Adminlogincontroller::class, 'index']);
Route::post('login', [Adminlogincontroller::class, 'login'])->name('admin.login');
Route::get('home', [Adminhomecontroller::class, 'index'])->name('admin.home');
Route::get('/patients', [PatientDetailController::class, 'view'])->name('patient.view');
});
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/patient/create', [PatientController::class, 'create'])->name('patient.create');
Route::post('/patient/store', [PatientController::class, 'store'])->name('patient.store');
