<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\UserController;
use App\Http\Controllers\membershipPlansController;


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

Route::get('admin/users',  [UserController::class, 'adminAddUser'])->name('users');
Route::get('admin/adduser', [UserController::class, 'create'])->name('admin.add.user');
Route::post('admin/users', [UserController::class, 'store'])->name('admin.add.user.submit'); 



Route::get('admin/manageusers', [UserController::class, 'manageUsers'])->name('admin.manage.users'); 
Route::get('admin/user/{id}',[UserController::class, 'viewUserProfile'] )->name('admin.user.profile.view'); 

Route::get('admin/memberships', [membershipPlansController::class, 'adminManageMemberships'])->name('admin.memberships');
Route::get('admin/managememberships', [membershipPlansController::class, 'create'])->name('admin.manage.memberships');
Route::post('admin/memberships',[membershipPlansController::class, 'store'])->name('admin.store.memberships');