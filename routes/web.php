<?php

use App\Http\Controllers\VolunteerController;
use App\Http\Controllers\HaithamController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [VolunteerController::class , 'index']);
Route::post('/', [VolunteerController::class , 'register'])->name('register');

Route::get('/haitham', [HaithamController::class , 'show']);

