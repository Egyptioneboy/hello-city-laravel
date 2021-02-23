<?php

use Illuminate\Support\Facades\Route;





Route::get('about-us', function () {
    return view('pages.about');
});

Route::get('', function () {
    return view('pages.home');
});