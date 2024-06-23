<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MovieController;
use App\Http\Controllers\AuthenController;
use App\Http\Middleware\IsAdmin;
use App\Http\Middleware\IsLogin;

// Route::get('/home', function () {
//     return view('home');
// });

Route::controller(MovieController::class)->middleware(IsLogin::class)->group(function() {
    Route::get('/home', 'getHome')->name('getHome');
    Route::middleware(IsAdmin::class)->group(function() {
        Route::get('/createMovie', 'getCreateMovie')->name('getCreateMovie');
        Route::post('/storeMovie', 'storeMovie')->name('storeMovie');
        Route::Get('/updateMovie/{id}', 'updateMovie')->name('updateMovie');
        Route::post('/editMovie/{id}', 'editMovie')->name('editMovie');
        Route::post('/deleteMovie/{id}', 'deleteMovie')->name('deleteMovie');
    });
});

Route::get('/register', [AuthenController::class, 'getRegister'])->name('getRegister');
Route::get('/storeRegister', [AuthenController::class, 'storeRegister'])->name('storeRegister');
Route::get('/login', [AuthenController::class, 'getLogin'])->name('getLogin');
Route::get('/storeLogin', [AuthenController::class, 'storeLogin'])->name('storeLogin');
Route::get('/logout', [AuthenController::class, 'logout'])->name('logout');



