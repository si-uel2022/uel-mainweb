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

Route::get('/alur', function () {
    return view('main.alur');
});

Route::get('/peraturan', function () {
    return view('main.peraturan');
});

//poin user
// Route::get('/ml', function () {
//     return view('coba.poinML');
// });
Route::get('/ml', [App\Http\Controllers\ShowController::class, 'showPoinML']);
Route::get('/pubg', function () {
    return view('coba.poinPUBG');
});
Route::get('/valorant', [App\Http\Controllers\ShowController::class, 'showPoinValorant']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/registration', [App\Http\Controllers\RegistController::class, 'showView'])->name('registration');

//submit data
Route::post('/registration/submitML', [App\Http\Controllers\RegistController::class, 'submitML'])->name('registration/submitML');
Route::post('/registration/tambahanML', [App\Http\Controllers\RegistController::class, 'tambahanML'])->name('registration/tambahanML');
Route::post('/registration/submitPUBG', [App\Http\Controllers\RegistController::class, 'submitPUBG'])->name('registration/submitPUBG');
Route::post('/registration/submitValorant', [App\Http\Controllers\RegistController::class, 'submitValorant'])->name('registration/submitValorant');
Route::post('/registration/tambahanValorant', [App\Http\Controllers\RegistController::class, 'tambahanValorant'])->name('registration/tambahanValorant');
Route::post('/registration/tambahanPUBG', [App\Http\Controllers\RegistController::class, 'tambahanPUBG'])->name('registration/tambahanPUBG');
Route::post('/registration/submitBA', [App\Http\Controllers\RegistController::class, 'submitBA'])->name('registration/submitBA');

Route::middleware(['auth'])->group(function(){
    Route::get('/admin', [App\Http\Controllers\AdminController::class, 'index'])->name('admin');

    //ML
    Route::get('admin/showML/', [App\Http\Controllers\AdminController::class, 'showML'])->name('admin.showML');
    Route::get('admin/showPlayerML/{id}', [App\Http\Controllers\AdminController::class, 'showPlayerML'])->name('admin.showPlayerML');
    Route::post('admin/detailPlayerML/', [App\Http\Controllers\AdminController::class, 'detailPlayerML'])->name('admin.showDetailML');
    Route::get('admin/acceptTimML/{tim}', [App\Http\Controllers\AdminController::class, 'acceptTimML'])->name('admin.acceptTimML');
    Route::get('admin/rejectTimML/{tim}', [App\Http\Controllers\AdminController::class, 'rejectTimML'])->name('admin.rejectTimML');
    Route::get('admin/downloadML/{tim}', [App\Http\Controllers\AdminController::class, 'downloadML'])->name('admin.downloadML');
    Route::get('admin/downloadLogoML/{tim}', [App\Http\Controllers\AdminController::class, 'downloadLogoML'])->name('admin.downloadLogoML');

    //PUBG
    Route::get('admin/showPUBG/', [App\Http\Controllers\AdminController::class, 'showPUBG'])->name('admin.showPUBG');
    Route::get('admin/showPlayerPUBG/{id}', [App\Http\Controllers\AdminController::class, 'showPlayerPUBG'])->name('admin.showPlayerPUBG');
    Route::post('admin/detailPlayerPUBG/', [App\Http\Controllers\AdminController::class, 'detailPlayerPUBG'])->name('admin.showDetailPUBG');
    Route::get('admin/acceptTimPUBG/{tim}', [App\Http\Controllers\AdminController::class, 'acceptTimPUBG'])->name('admin.acceptTimPUBG');
    Route::get('admin/rejectTimPUBG/{tim}', [App\Http\Controllers\AdminController::class, 'rejectTimPUBG'])->name('admin.rejectTimPUBG');
    Route::get('admin/downloadPUBG/{tim}', [App\Http\Controllers\AdminController::class, 'downloadPUBG'])->name('admin.downloadPUBG');
    Route::get('admin/downloadLogoPUBG/{tim}', [App\Http\Controllers\AdminController::class, 'downloadLogoPUBG'])->name('admin.downloadLogoPUBG');

    //Valorant
    Route::get('admin/showValorant/', [App\Http\Controllers\AdminController::class, 'showValorant'])->name('admin.showValorant');
    Route::get('admin/showPlayerValorant/{id}', [App\Http\Controllers\AdminController::class, 'showPlayerValorant'])->name('admin.showPlayerValorant');
    Route::post('admin/detailPlayerValorant/', [App\Http\Controllers\AdminController::class, 'detailPlayerValorant'])->name('admin.showDetailValorant');
    Route::get('admin/acceptTimValorant/{tim}', [App\Http\Controllers\AdminController::class, 'acceptTimValorant'])->name('admin.acceptTimValorant');
    Route::get('admin/rejectTimValorant/{tim}', [App\Http\Controllers\AdminController::class, 'rejectTimValorant'])->name('admin.rejectTimValorant');
    Route::get('admin/downloadValorant/{tim}', [App\Http\Controllers\AdminController::class, 'downloadValorant'])->name('admin.downloadValorant');
    Route::get('admin/downloadLogoValorant/{tim}', [App\Http\Controllers\AdminController::class, 'downloadLogoValorant'])->name('admin.downloadLogoValorant');

    //Brand Ambassador
    Route::get('admin/showBA/', [App\Http\Controllers\AdminController::class, 'showBA'])->name('admin.showBA');
    Route::post('admin/detailBA/', [App\Http\Controllers\AdminController::class, 'detailBA'])->name('admin.showDetailBA');
    Route::get('admin/acceptBA/{ba}', [App\Http\Controllers\AdminController::class, 'acceptBA'])->name('admin.acceptBA');
    Route::get('admin/rejectBA/{ba}', [App\Http\Controllers\AdminController::class, 'rejectBA'])->name('admin.rejectBA');
    Route::get('admin/downloadPorto/{ba}', [App\Http\Controllers\AdminController::class, 'downloadPorto'])->name('admin.downloadPorto');
    Route::get('admin/downloadBA/{ba}', [App\Http\Controllers\AdminController::class, 'downloadBA'])->name('admin.downloadBA');
});

//poin
Route::get('/poin', [App\Http\Controllers\PoinController::class, 'index']);
Route::get('/poin/ml', [App\Http\Controllers\PoinController::class, 'bukaCabang_ML']);
Route::get('/poin/pubg', [App\Http\Controllers\PoinController::class, 'bukaCabang_PUBG']);
Route::get('/poin/valorant', [App\Http\Controllers\PoinController::class, 'bukaCabang_Valorant']);
Route::post('/match/ml', [App\Http\Controllers\PoinController::class, 'match_ML'])->name('match.ml');
Route::post('/match/pubg', [App\Http\Controllers\PoinController::class, 'match_PUBG'])->name('match.pubg');
Route::post('poin/updatepoin/', [App\Http\Controllers\PoinController::class, 'updatePoin'])->name('poin.updatepoin');
Route::post('poin/updatepoin_ML/', [App\Http\Controllers\PoinController::class, 'updatePoin_ML'])->name('poin.updatepoin_ML');
Route::post('poin/updatepoin_PUBG/', [App\Http\Controllers\PoinController::class, 'updatePoin_PUBG'])->name('poin.updatepoin_PUBG');
Route::post('poin/simpanpoin_ML/', [App\Http\Controllers\PoinController::class, 'simpanPoin_ML'])->name('poin.simpanPoin_ML');
Route::post('poin/simpanpoin_PUBG/', [App\Http\Controllers\PoinController::class, 'simpanPoin_PUBG'])->name('poin.simpanPoin_PUBG');
Route::post('poin/simpanpoin_Valorant/', [App\Http\Controllers\PoinController::class, 'simpanPoin_Valorant'])->name('poin.simpanPoin_Valorant');

Route::get('/klasemen',  [App\Http\Controllers\KlasemenController::class, 'index']);