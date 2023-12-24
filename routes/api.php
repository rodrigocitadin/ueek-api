<?php

use App\Http\Controllers\AddressController;
use App\Http\Controllers\NumbersController;
use App\Http\Controllers\TransactionController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::resource('user', UserController::class);
Route::resource('address', AddressController::class);
Route::resource('numbers', NumbersController::class);
Route::resource('transaction', TransactionController::class);
