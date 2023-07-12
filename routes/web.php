<?php

use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('home');
});
//You Can also return the view file
