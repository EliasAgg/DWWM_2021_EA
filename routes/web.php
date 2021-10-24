<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\BusinessController;

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

Route::get('/', [BusinessController::class, 'listAll'])
->middleware('auth')
->name('home');

Route::get('/business/{id}', [BusinessController::class, 'single'])
->middleware('auth')
->name('business_details');

Route::get('/dashboard', function () {
    return view('dashboard');
})
->middleware(['auth'])
->name('dashboard');

Route::get('/business/filter/{glyph}', [BusinessController::class, 'filteredList'])
->middleware('auth')
->name('business_filter');

Route::get('/single/{id}', [BusinessController::class, 'single'])
->middleware('auth')
->name('single');

Route::get('/admin', [AdminController::class, 'index'])->name('admin');

require __DIR__ . '/auth.php';
