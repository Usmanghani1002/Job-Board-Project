<?php

use App\Http\Controllers\JobController;
use App\Http\Controllers\LoginUserController;
use App\Http\Controllers\RegisteredUserController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\TagController;
use Illuminate\Support\Facades\Route;

Route::get('/', [JobController::class, 'index']);
Route::get('/jobs/create', [JobController::class, 'create'])->middleware('auth');
Route::post('/jobs', [JobController::class, 'store'])->middleware('auth');
Route::get('/jobs/{job:id}', [JobController::class, 'show']);


Route::get('/search', SearchController::class);
Route::get('/tags/{tag:name}', TagController::class); //tag/frontend

Route::middleware('guest')->group(function(){
    Route::get('/register',[RegisteredUserController::class,'create'])->name('register');
    Route::post('/register',[RegisteredUserController::class,'store']);
    Route::get('/login',[LoginUserController::class,'create']);
    Route::post('/login',[LoginUserController::class,'store']);
});

Route::delete('/logout',[LoginUserController::class,'destroy'])->middleware('auth');