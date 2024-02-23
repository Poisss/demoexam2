<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;


Route::get('/signup',[UserController::class,'create']);
Route::post('/logup',[UserController::class,'store']);

Route::get('/signin',[UserController::class,'signin']);
Route::post('/login',[UserController::class,'login']);

Route::post('/logout',[UserController::class,'logout']);
