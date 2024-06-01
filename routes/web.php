<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Dashboard\MemberController;
use App\Http\Controllers\Dashboard\OrderController;
use App\Http\Controllers\Dashboard\ProfileController;
use App\Http\Controllers\Dashboard\RequestController;
use App\Http\Controllers\Dashboard\ServiceController;
use App\Http\Controllers\Landing\LandingController;

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

Route::get('detail-booking/{id}', LandingController::class, 'detail_booking')->name('detail.booking.landing');
Route::get('booking/{id}', LandingController::class, 'booking')->name('booking.landing');
Route::get('detail/{id}', LandingController::class, 'detail')->name('detail.landing');
Route::get('explore/{id}', LandingController::class, 'explore')->name('explore.landing');
Route::resource('/', LandingController::class);

Route::group(['prefix' => 'member', 'as' => 'member.', 'middleware' => ['auth:sanctum', 'verified']], function(){
    // Dashboard
    Route::resource('dashboard', MemberController::class);

    // Service
    Route::resource('service', ServiceController::class);

    // Request
    Route::get('approve-request/{id}', RequestController::class, 'approve')->name('approve.request');
    Route::resource('request', RequestController::class);

    // Order
    Route::get('accept/order/{id}', OrderController::class, 'accepted')->name('accept.order');
    Route::get('reject/order/{id}', OrderController::class, 'rejected')->name('reject.order');
    Route::resource('order', OrderController::class);

    // Profile
    Route::get('delete-photo', ProfileController::class, 'delete')->name('delete.photo.profile');
    Route::resource('profile', ProfileController::class);


});

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::middleware([
//     'auth:sanctum',
//     config('jetstream.auth_session'),
//     'verified'
// ])->group(function () {
//     Route::get('/dashboard', function () {
//         return view('dashboard');
//     })->name('dashboard');
// });
