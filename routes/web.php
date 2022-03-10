<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\advancedcontroller;

Route::get('/login', function(){
    return view('login');
});

Route::get('/login', [advancedcontroller::class, 'index']);

Route::get('/list', function(){
    return view('list');
});

Route::get('/list', [listcontroller::class, 'index']);
