<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/test', function () {
//     return view('welcome');
// });

Route::get('/test', function (){
    return view('test');
});

Route::get('/about', function (){
    return view('about', ['name' => 'pipisa']);
});