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
Route::get('/nuovo/evento',[EventController::class, 'createEvent'])->name('event.create');//isadmin middleware
Route::get('/categoria/{category}',[PublicController::class, 'categoryShow'])->name('categoryShow');//isadmin middleware
Route::resource('events',EventController::class);