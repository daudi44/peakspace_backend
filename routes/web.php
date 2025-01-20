<?php

use App\Http\Controllers\BalanceController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProductivityController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

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
    if (auth()->check()) {
        return redirect('/dashboard');
    }
    return redirect('/login');
});


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {

    Route::get('/dashboard', [DashboardController::class, 'loadDashboard'])->name('dashboard');
    Route::get('/economy', [BalanceController::class, 'loadEconomy'])->name('economy');
    Route::get('/productivity', [ProductivityController::class, 'loadProductivity'])->name('productivity');

    Route::get('/users', function () {
        return Inertia::render('Users');
    })->name('users');

    Route::get('/roles', function () {
        return Inertia::render('Roles');
    })->name('roles');

    Route::get('/permissions', function () {
        return Inertia::render('Permissions');
    })->name('permissions');

    Route::get('/profile', function () {
        return Inertia::render('Profile');
    })->name('profile');

    Route::get('/settings', function () {
        return Inertia::render('Settings');
    })->name('settings');

    
});
