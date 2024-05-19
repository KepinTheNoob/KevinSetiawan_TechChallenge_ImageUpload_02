<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ImageController;

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

Route::get('/create', [ImageController::class, 'create'])->name('create');
Route::post('/create1', [ImageController::class, 'create1']);
Route::get('/welcome', [ImageController::class, 'welcome'])->name('welcome');
Route::get('/', [ImageController::class, 'welcome'])->name('welcome');