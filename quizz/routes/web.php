<?php

use App\Http\Controllers\QuizController;
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



Route::prefix('quiz')->name('quiz.')->group(function() { 

    Route::group(['middleware' => 'can:isAdmin'], function () {
        Route::get('/create', [QuizController::class, 'create'])->name('create');
        Route::post('/create', [QuizController::class, 'store'])->name('store');
    });
});


Route::get('/quizz', [QuizController::class, 'quizz'])->name('quizz');
Route::post('/results', [QuizController::class, 'results'])->name('results');
