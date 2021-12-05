<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\PaymentController;

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


if (App::environment('production')) {
    URL::forceScheme('https');
}

Route::get('/', [PagesController::class, 'index']);
Route::get('/profile', [PagesController::class, 'showProfile']);
Route::get('/cards', [PagesController::class, 'showCards']);
Route::get('/recipient-bank',[PagesController::class, 'showRecipientBank']);
Route::get('/send-money', [PagesController::class, 'sendMoney']);
Route::get('/withdraw-money', [PagesController::class, 'withdrawMoney']);
Route::get('/transactions', [PagesController::class, 'showTransactions']);
Route::get('/deposit-money', [PagesController::class, 'depositMoney']);
Route::get('/dashboard', [PagesController::class, 'showDashboard']);
Route::get('/login', [PagesController::class, 'showLogin'])->name('login');
Route::get('/signup', [PagesController::class, 'showRegister']);
Route::post('/sendmoney',[PaymentController::class,'sendMoney'])->name('sendmoney');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
