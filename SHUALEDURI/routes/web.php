<?php

use App\Http\Controllers\ApplicantController;
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

Route::get('/', [ApplicantController::class, 'index']);

Route::get('/applicant/{applicant}/hire', [ApplicantController::class, 'hire'])->name('hire');

Route::get('/applicant/{applicant}/edit', [ApplicantController::class, 'edit'])->name('edit');

Route::patch('/applicant/{id}/update', [ApplicantController::class, 'update'])->name('update');
