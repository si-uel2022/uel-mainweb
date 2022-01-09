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
Route::post('/registration/submitML', [App\Http\Controllers\RegistController::class, 'submitML'])->name('registration/submitML');
Route::post('/registration/submitPUBG', [App\Http\Controllers\RegistController::class, 'submitPUBG'])->name('registration/submitPUBG');
Route::post('/registration/submitValorant', [App\Http\Controllers\RegistController::class, 'submitValorant'])->name('registration/submitValorant');

Route::middleware(['auth'])->group(function(){
    Route::get('/admin', [App\Http\Controllers\AdminController::class, 'index'])->name('admin');

    //ML
    Route::get('admin/showML/', [App\Http\Controllers\AdminController::class, 'showML'])->name('admin.showML');
    Route::get('admin/showPlayerML/{id}', [App\Http\Controllers\AdminController::class, 'showPlayerML'])->name('admin.showPlayerML');
    Route::post('admin/detailPlayerML/', [App\Http\Controllers\AdminController::class, 'detailPlayerML'])->name('admin.showDetailML');
    Route::get('admin/acceptTimML/{tim}', [App\Http\Controllers\AdminController::class, 'acceptTimML'])->name('admin.acceptTimML');
    Route::get('admin/rejectTimML/{tim}', [App\Http\Controllers\AdminController::class, 'rejectTimML'])->name('admin.rejectTimML');
    Route::get('admin/downloadML/{tim}', [App\Http\Controllers\AdminController::class, 'downloadML'])->name('admin.downloadML');

    //PUBG
    Route::get('admin/showPUBG/', [App\Http\Controllers\AdminController::class, 'showPUBG'])->name('admin.showPUBG');
    Route::get('admin/showPlayerPUBG/{id}', [App\Http\Controllers\AdminController::class, 'showPlayerPUBG'])->name('admin.showPlayerPUBG');
    Route::post('admin/detailPlayerPUBG/', [App\Http\Controllers\AdminController::class, 'detailPlayerPUBG'])->name('admin.showDetailPUBG');
    Route::get('admin/acceptTimPUBG/{tim}', [App\Http\Controllers\AdminController::class, 'acceptTimPUBG'])->name('admin.acceptTimPUBG');
    Route::get('admin/rejectTimPUBG/{tim}', [App\Http\Controllers\AdminController::class, 'rejectTimPUBG'])->name('admin.rejectTimPUBG');
    Route::get('admin/downloadPUBG/{tim}', [App\Http\Controllers\AdminController::class, 'downloadPUBG'])->name('admin.downloadPUBG');

    //Valorant
    Route::get('admin/showValorant/', [App\Http\Controllers\AdminController::class, 'showValorant'])->name('admin.showValorant');
    Route::get('admin/showPlayerValorant/{id}', [App\Http\Controllers\AdminController::class, 'showPlayerValorant'])->name('admin.showPlayerValorant');
    Route::post('admin/detailPlayerValorant/', [App\Http\Controllers\AdminController::class, 'detailPlayerValorant'])->name('admin.showDetailValorant');
    Route::get('admin/acceptTimValorant/{tim}', [App\Http\Controllers\AdminController::class, 'acceptTimValorant'])->name('admin.acceptTimValorant');
    Route::get('admin/rejectTimValorant/{tim}', [App\Http\Controllers\AdminController::class, 'rejectTimValorant'])->name('admin.rejectTimValorant');
    Route::get('admin/downloadValorant/{tim}', [App\Http\Controllers\AdminController::class, 'downloadValorant'])->name('admin.downloadValorant');

    //Brand Ambassador
    Route::get('admin/showBA/', [App\Http\Controllers\AdminController::class, 'showBA'])->name('admin.showBA');
    Route::post('admin/detailBA/', [App\Http\Controllers\AdminController::class, 'detailBA'])->name('admin.showDetailBA');
});
