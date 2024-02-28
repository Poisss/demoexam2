<?php

use App\Http\Controllers\ApllicationController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/',function(){
    return redirect()->route('signup');
});
Route::get('/signup',[UserController::class,'create'])->name('signup');
Route::post('/logup',[UserController::class,'store'])->name('logup');

Route::get('/signin',[UserController::class,'signin'])->name('signin');
Route::post('/login',[UserController::class,'login'])->name('login');

Route::post('/logout',[UserController::class,'logout'])->name('logout');

Route::middleware('auth:sanctum')->group(function(){
    Route::get('/apllications',[ApllicationController::class,'index'])->name('index');
    Route::resource('/apllications', ApllicationController::class)->only('store','create');

    Route::prefix('/admin')->group(function(){
        Route::get('/apllications',[ApllicationController::class,'indexadmin'])->name('indexadmin');
        Route::resource('/apllications', ApllicationController::class)->only('edit','update');
    })->middleware('checkRole:admin');
});
