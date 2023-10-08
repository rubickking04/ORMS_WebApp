<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User\AuthController;

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
    return redirect()->route('home');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::controller(AuthController::class)->group(function(){
    Route::get('/redirect', 'redirectToProvider')->name('redirect');
    Route::get('/auth/google/callback', 'handleProviderCallback')->name('handle');
});
// Route::get('/callback', 'Auth\LoginController@handleProviderCallback');
