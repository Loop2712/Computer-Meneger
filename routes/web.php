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

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::get('redirects','App\Http\Controllers\HomeController@index');

Route::middleware(['auth'])->group(function () {


    Route::middleware(['type:1'])->group(function () {

    //Admin
        Route::get('/teacher', function () {
            return view('teacher/index');
        });
    });

    //User
    Route::middleware(['type:2'])->group(function () {

        Route::get('/teacher', function () {
            return view('teacher/index');
        });
    });

    //professor
    Route::middleware(['type:3'])->group(function () {

        Route::get('/teacher', function () {
            return view('teacher/index');
        });
    });


});
    