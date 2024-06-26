<?php

use App\Http\Controllers\EventController;
use App\Http\Controllers\PublicController;
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

Route::get('/', [PublicController::class , 'home'])->name('home');
Route::get('/chiSiamo',[PublicController::class , 'chiSiamo'])->name('chiSiamo');
Route::resource('events',EventController::class);