<?php

Route::prefix('')->group(function () {

    Route::get('/', function () {
        return view('front.index');
    });

    Route::get('/contact', function () {
        return view('front.contact');
    });


    Route::get('/about', function () {
        return view('front.about');
    });

    Route::get('/hotel', function () {
        return view('front.hotel');
    });

    Route::get('/flat', function () {
        return view('front.flat');
    });


    Route::get('/blog', function () {
        return view('front.blog');
    });



});
