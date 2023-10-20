<?php

use App\Http\Controllers\LogoutAdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginAdminController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AdminUserController;

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
    return view('welcome');
});
Route::get('/home', [DashboardController::class, 'index']
)->name('dashboard.index');

Route::get('/admin', [LoginAdminController::class, 'index']
)->name('auth.index');
Route::post('/login', [LoginAdminController::class, 'login']
)->name('auth.login');
Route::get('/login', [LoginAdminController::class, 'login']
)->name('auth.login');
Route::get('/logout', [LogoutAdminController::class, 'logout']
)->name('auth.logout');

//Users
Route::prefix('users')->group(function () {
    Route::get('/', [AdminUserController::class, 'index']
    )->name('users.index');
    Route::get('/create', [AdminUserController::class, 'create']
    )->name('users.create');
    Route::post('/store', [AdminUserController::class, 'store']
    )->name('users.store');
    Route::get('/edit/{id}', [AdminUserController::class, 'edit']
    )->name('users.edit');
    Route::post('/update/{id}', [AdminUserController::class, 'update']
    )->name('users.update');
    Route::get('/delete/{id}', [AdminUserController::class, 'delete']
    )->name('users.delete');
});
