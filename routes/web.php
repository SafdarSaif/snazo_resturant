<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });



Route::get('/', function () {
    return view('frontend-content/index');
});


Route::get('/index', function () {
    return view('frontend-content/index');
});


