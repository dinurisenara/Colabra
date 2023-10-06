<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;


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
Route::post('/admin/login', 'App\Http\Controllers\Auth\LoginController@adminLogin')->name('admin.login.submit');

Route::view('admin/dashboard', 'admin-dashboard')->name('admin.dashboard');
Route::view('admin/manage-memberships', 'admin-manage-memberships')->name('admin.manage.memberships');
Route::view('admin/add-user', 'admin-add-user')->name('admin.add.user'); 
Route::view('admin/manage-users', 'admin-manage-users')->name('admin.manage.users'); 
Route::view('admin/user-profile-view', 'admin-user-profile-view')->name('admin.user.profile.view'); 

// Route::middleware(['auth', 'admin'])->group(function () {
//     // Admin-only routes


// });
