<?php

use App\Http\Controllers\ngecrul;
use App\Http\Controllers\OrderanController;
use App\Http\Controllers\TrackingController;
use Illuminate\Support\Facades\Route;

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


Route::get('/', [OrderanController::class , 'ListOrder']);

Route::get('track', [TrackingController::class, 'cek'])->name('track.cek');
