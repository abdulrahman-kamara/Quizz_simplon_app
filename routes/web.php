<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CrudQuizzController;

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
    return view('login');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/signup', function () {
    return view('signup');
});

Route::get('/dashboard', function () {
    return view('dashboard');
});


Route::get('crudQuizz', [CrudQuizzController::class,"readQuizz" ]) ;

Route::post('fill-quizz', [CrudQuizzController::class,"createQuizz" ]) ;

Route::post('modify_quizz', [CrudQuizzController::class,"updateQuizz" ]) ;

Route::post('remove_quizz_id', [CrudQuizzController::class,"deleteQuizz" ]) ;







