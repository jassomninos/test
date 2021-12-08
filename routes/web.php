<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\LoginController;
use App\Http\Controllers\Admin\AdminController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/admin', function () {
    return view('admin/adminPages/login');
});

Route::get('/login', function () {
    return view('admin.adminPages.login');
})->name('login');

Route::prefix('admin')->group(function () {
    Route::post('signIn',[LoginController::class,'signIn'])->name('signIn');
    Route::get('dashboard',[AdminController::class,'index'])->name('dashboard')->middleware('is_admin');
    Route::get('user-list',[AdminController::class,'userList'])->name('user-list')->middleware('is_admin');
    Route::get('user-report',[AdminController::class,'userReport'])->name('user-report')->middleware('is_admin');
    Route::get('user-profile',[AdminController::class,'userProfile'])->name('user-profile')->middleware('is_admin');
    Route::get('user-tax',[AdminController::class,'userTax'])->name('user-tax')->middleware('is_admin');
    Route::get('admin-logout',[AdminController::class,'adminLogout'])->name('admin-logout')->middleware('is_admin');
    Route::get('change-password',[AdminController::class,'changePassword'])->name('change-password')->middleware('is_admin');
    Route::get('admin-notification',[AdminController::class,'adminNotification'])->name('admin-notification')->middleware('is_admin');
    Route::get('user-transactions',[AdminController::class,'userTransactions'])->name('user-transactions')->middleware('is_admin');
});
