<?php

use Illuminate\Support\Facades\Route;

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//  admin login route
//Route::view('admin/login', 'auth.admin-login')->name('admin.login');

Route::get('/admin/login', 'App\Http\Controllers\Auth\LoginController@showAdminLoginForm')->name('admin.login');
Route::post('/admin/login', 'App\Http\Controllers\Auth\LoginController@adminLogin');


Route::middleware(['auth', 'admin'])->group(function () {
    // Admin-only routes
    Route::view('admin/dashboard', 'admin-dashboard')->name('admin.dashboard');

});
