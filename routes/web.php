<?php

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

//Route::get('/', function () {
//    return view('helloworld');
//});

Route::get('/', [\App\Http\Controllers\WelcomeController::class, 'show']);

Route::get('/register',[\App\Http\Controllers\WelcomeController::class, 'register'] );
Route::get('/login', [\App\Http\Controllers\WelcomeController::class, 'login']);

Route::get('/read', [\App\Http\Controllers\BlogController::class, 'readIndex']);

Route::get('/write', [\App\Http\Controllers\BlogController::class, 'writeIndex']);

Route::post('/write/submit', [\App\Http\Controllers\BlogController::class, 'submitBlogPost']);
