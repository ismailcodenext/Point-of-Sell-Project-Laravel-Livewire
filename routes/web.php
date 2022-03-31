<?php

use Illuminate\Support\Facades\Route;

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
    return view('auth.login');
});



Route::group(['middleware' => 'auth'], function () {
    Route::get('/admin', \App\Http\Controllers\Admin\DashboardController::class)->name('admin');

    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

    Route::get('/view-users', \App\Http\Livewire\ViewUsers::class)->name('view.users');
    });


