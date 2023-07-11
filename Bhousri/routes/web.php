<?php

use Faker\Core\Color;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BController;
use App\Http\Controllers\ComputersController;

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

Route::get('/', [BController::class, 'index'])->name('home.index');
Route::get('/about', [BController::class, 'about'])->name('home.about');

Route::get('/contact', [BController::class, 'contact'])->name('home.contact');


Route::resource('computers', ComputersController::class);
