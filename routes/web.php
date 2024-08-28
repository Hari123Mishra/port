<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('front');
});

Route::get('/about',function(){
    return view('about');
});
Route::get('/resume',function(){
    return view('resume');
});
Route::get('/services',function(){
    return view('services');
});
Route::get('/portfolio',function(){
    return view('portfolio');
});
Route::get('/contact',function(){
    return view('contact');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
