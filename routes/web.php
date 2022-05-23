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

/* -------------------------- */
//  Business routes
/* -------------------------- */

// view all businesses
Route::get('/', [BusinessController::class, 'listAll'])
->middleware('auth')
->name('home');

// view a single business from its id
Route::get('/business/{id}', [BusinessController::class, 'single'])
->middleware('auth')
->name('business_details');

// view businesses filtered from their glyph (letter)
Route::get('/business/filter/{glyph}', [BusinessController::class, 'filteredList'])
->middleware('auth')
->name('business_filter');

/* -------------------------- */
//  User routes
/* -------------------------- */

// view user dashboard
Route::get('/dashboard', function () {
    return view('dashboard');
})
->middleware(['auth'])
->name('dashboard');

/* -------------------------- */
//  Admin routes
/* -------------------------- */

// main admin route
Route::get('/admin', [AdminController::class, 'index'])
->middleware('auth')->middleware('admin')
->name('admin');

// get create business form
Route::view('/admin/business/create', 'admin.business.create-edit-form', [
    'action' => 'Ajouter un établissement',
    'edit' => false
    ])
->middleware('auth')->middleware('admin')->name('admin-create');

// send post request to add new business to DB
Route::post('/admin/business/create', [AdminController::class, 'createBusiness'])
->middleware('auth')->middleware('admin')->middleware('antiXSS');

// get edit business form
Route::get('/admin/business/edit/{id}', [AdminController::class, 'showEditForm'])
->middleware('auth')->middleware('admin');

// send post request to edit a business from its id
Route::post('/admin/business/edit/{id}', [AdminController::class, 'editBusiness'])
->middleware('auth')->middleware('admin')->middleware('antiXSS');

// view details of a single business from its id
Route::get('/admin/business/{id}', [AdminController::class, 'single'])
->middleware('auth')->middleware('admin')
->name('admin_single');

// delete a business from its id
Route::get('/admin/business/destroy/{id}', [AdminController::class, 'destroyBusiness'])
->middleware('auth')->middleware('admin');

require __DIR__ . '/auth.php';
