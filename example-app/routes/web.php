<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

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

Route::get('/posts',[PostController::class, 'index']);