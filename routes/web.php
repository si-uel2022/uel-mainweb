<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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
    return view('main.home');
});

// Route::get('/home', function () {
//     return view('main.home');
// });

Route::get('/aboutus', function () {
    return view('main.aboutus');
});

Route::get('/faq', function () {
    return view('main.faq');
});

Route::get('/registration', function () {
    return view('main.registration');
});
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/registration', [App\Http\Controllers\RegistController::class, 'showView'])->name('registration');

//submit data
Route::get('/registration/submitML', [App\Http\Controllers\RegistController::class, 'submitML'])->name('registration/submitML');
Route::get('/registration/submitPUBG', [App\Http\Controllers\RegistController::class, 'submitPUBG'])->name('registration/submitPUBG');
Route::get('/registration/submitValorant', [App\Http\Controllers\RegistController::class, 'submitValorant'])->name('registration/submitValorant');

Route::middleware(['auth'])->group(function(){
    Route::get('/admin', [App\Http\Controllers\AdminController::class, 'index'])->name('admin');
    Route::get('admin/showML/', [App\Http\Controllers\AdminController::class, 'showML'])->name('admin.showML');
    Route::get('admin/showPUBG/', [App\Http\Controllers\AdminController::class, 'showPUBG'])->name('admin.showPUBG');
    Route::get('admin/showValorant/', [App\Http\Controllers\AdminController::class, 'showValorant'])->name('admin.showValorant');
    Route::get('admin/showPlayerML/{id}', [App\Http\Controllers\AdminController::class, 'showPlayerML'])->name('admin.showPlayerML');
    Route::get('admin/acceptTim/{tim}', [App\Http\Controllers\AdminController::class, 'acceptTim'])->name('admin.acceptTim');
    Route::get('admin/rejectTim/{tim}', [App\Http\Controllers\AdminController::class, 'rejectTim'])->name('admin.rejectTim');
});
