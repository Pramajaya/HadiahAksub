<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Movie;
use App\Http\Controllers\ApiController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/movie', [ApiController::class, 'getMovie'])->name('getMovie');
Route::post('/storePostMovie', [ApiController::class, 'storePostMovie'])->name('storePostMovie');
Route::post('/updatePostMovie/{id}', [ApiController::class, 'updatePostMovie'])->name('updatePostMovie');
Route::post('/deletePostMovie/{id}', [ApiController::class, 'deletePostMovie'])->name('deletePostMovie');

