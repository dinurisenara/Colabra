<?php

use App\Http\Controllers\Admin\membershipPlansController;
use App\Http\Controllers\Membership_plansController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ReservationController;
use App\Livewire\ManageMemberships;
use App\Http\Controllers\BookingsController;



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

// admin routes

use App\Http\Controllers\Admin\AdminController;

Route::group(['prefix' => 'admin', 'namespace' => 'Admin', 'as' => 'admin.'], function () {

    // Login Routes (no auth middleware)
    Route::view('/login', 'auth.admin-login')->name('login');
    Route::post('/login', [AdminController::class, 'adminLogin'])->name('login.submit');

    // Auth-protected Routes
    Route::middleware(['auth'])->group(function () {
        Route::view('/dashboard', 'admin.admin-dashboard')->name('dashboard');

        Route::view('/users', 'users')->name('users');
        Route::view('/adduser', 'admin.adminAddUser')->name('add.user');
        Route::post('/users', [AdminController::class, 'store'])->name('add.user.submit');
        Route::post('/users/{id}/update', [AdminController::class,'updateUser'])->name('update.user');


        Route::get('/manageusers', [AdminController::class, 'manageUsers'])->name('manage.users');
        Route::get('/user/{id}', [AdminController::class, 'viewUserProfile'])->name('user.profile.view');

        Route::view('/memberships', 'admin.adminManagememberships')->name('manage.memberships');
        //Route::post('/memberships', [AdminController::class, 'storeplan'])->name('store.memberships');
        Route::get('/view-memberships', [AdminController::class, 'viewMemberships'])->name('view.memberships');
        Route::get('/edit-membership/{id}', [AdminController::class, 'editMembership'])->name('edit.membership');
        Route::get('/delete-membership/{id}', [AdminController::class, 'deleteMembership'])->name('delete.membership');

        Route::get('/admin/memberships/{id}/edit', [AdminController::class, 'editMembership'])
            ->name('edit.membership');
        Route::put('/admin/memberships/{id}', [AdminController::class, 'updateMembership'])
            ->name('update.membership');

        Route::get('/reservations', [ReservationController::class, 'index'])->name('reservations.index');
        Route::get('/reservations/{id}/edit', [ReservationController::class, 'edit'])->name('reservations.edit');
        Route::put('/reservations/{id}', [ReservationController::class, 'update'])->name('reservations.update');
        Route::post('/reservations/store', [ReservationController::class, 'store'])->name('reservations.store');
        Route::get('/bookings', [BookingsController::class, 'index'])->name('bookings.index');

        Route::post('/bookings/store', [BookingsController::class, 'store'])->name('bookings.store');


    });
});

// user routes
        Route::get('/memberships/view', [Membership_plansController::class , 'index'])->name('memberships.view');


