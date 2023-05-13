<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\MovieController;

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
    return view('welcome');
});

Route::get('/test', [MovieController::class, 'index']);


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard')->with(['id'=>1]);
    })->name('dashboard');
    Route::get('/movie/{id}', function ($id) {
        return view('movie-detail')->with(['id'=>$id]);
    })->name('detail');
    Route::post('/movie/destroy/{id}', [MovieController::class, 'destroy']);
    Route::post('/movie/edit/{id}', [MovieController::class, 'edit']);
});
