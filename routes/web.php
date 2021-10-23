<?php

use App\Http\Controllers\BusinessController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ServiceController;

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

Route::get('/', [BusinessController::class, 'listAll'])->name('home');

Route::get('/business/{id}', [BusinessController::class, 'single'])->name('business_details');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/business/filter/{glyph}', [BusinessController::class, 'filteredList'])->name('business_filter');

require __DIR__ . '/auth.php';
