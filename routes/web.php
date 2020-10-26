<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController as HomeController;
use App\Http\Controllers\NewController as NewController;
use App\Http\Controllers\PortfolioController as PortfolioController;
use App\Http\Controllers\MessagesController as MessagesController;

Route::resource('portfolio', PortfolioController::class)->parameters(['portfolio' => 'project']);
Route::view('/','home')->name('home');
Route::view('/contact','contact')->name('contact');
Route::view('/about','about')->name('about');
Route::post('contact',[MessagesController::class,'store']);
Auth::routes();