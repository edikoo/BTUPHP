<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ParcelController;
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

Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::prefix('parcel')->name('parcel.')->group(function() {  


    Route::group(['middleware' => 'can:Admin'], function () {

        Route::get('/create', [ParcelController::class, 'create'])->name('create');
        Route::post('/store', [ParcelController::class, 'store'])->name('store');
        Route::get('/{id}/edit', [ParcelController::class, 'edit'])->name('edit'); 
        Route::patch('/{id}/update', [ParcelController::class, 'update'])->name('update'); 
        Route::delete('/{id}/delete', [ParcelController::class, 'destroy'])->name('destroy'); 

        Route::post('/move', [ParcelController::class, 'move'])->name('move');

    });

    Route::get('/{id}/index', [ParcelController::class, 'index'])->name('index');

});

Route::resource('/category', CategoryController::class)->except('show');


