<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\ViewUsers;


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

Route::group(['middleware' => 'guest'], function () {

    Route::get('/', function () {
    return view('auth.login');
});

});

Route::group(['middleware' => 'auth'], function () {
    Route::get('/admin', \App\Http\Controllers\Admin\DashboardController::class)->name('admin');

    // Route::get('admin', DashboardLayouts::class)->name('admin');

    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

    Route::get('/view-users', ViewUsers::class)->name('view-users');
    });


