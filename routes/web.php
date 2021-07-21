<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\icecekler;
use App\Http\Controllers\default_controller;
use App\Http\Middleware;
use App\Http\Controllers\Admin\admin_controller;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProductController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', [LoginController::class,'index'])->name('dashboard');
Route::get('/deletebeverages/{id}',[icecekler::class,'delete'])->name('delete.beverages');
Route::post('beverages',[icecekler::class,'store'])->name('icecekler');
Route::get('beverages_list',[default_controller::class,'index'])->name('beverages_list');

Route::post('default_beverages_store',[default_controller::class,'store'])->name('default_store');
Route::resource('drinks',ArticleController::class);
Route::get('bekleyen_icecekler',[icecekler::class,'index'])->name("drinkss");
Route::get('drink_list',[default_controller::class,'index'])->name('beverages_listt');

Route::group(['middleware' => ['auth','IsAdmin'],'prefix'=>'admin'], function (){
    Route::get('icecekler',[icecekler::class,'index'])->name("drink");
    Route::get('default_beverages_list',[default_controller::class,'index']);
    
});
