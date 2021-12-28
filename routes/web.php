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
