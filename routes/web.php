<?php

use Illuminate\Support\Facades\Route;


// test.domain/
Route::domain('{subdomain}.domain')->group(function ($subdomain) {
    Route::get('/', function () {
        return view('welcome');
    });
});


Route::middleware('test:3,4')->group(function () {
    return fn() => 'test';
});
