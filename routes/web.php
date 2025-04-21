<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return view('about');
});
 
Route::get('/greet/{name}', function ($name) {
    return view('greet', ['name' => $name]);
});