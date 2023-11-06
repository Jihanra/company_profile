<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    //return view('home.index');
    $data = [
        'content' => 'home/home/index'
    ];
    return view('home.layouts.wrapper', $data);
});

Route::get('/AboutUs', function () {
    $data = [
        'content' => 'home/about/index'
    ];
    return view('home.layouts.wrapper', $data);
});


Route::get('/OurService', function () {
    $data = [
        'content' => 'home/service/index'
    ];
    return view('home.layouts.wrapper', $data);
});

Route::get('/ContactUs', function () {
    $data = [
        'content' => 'home/contact/index'
    ];
    return view('home.layouts.wrapper', $data);
});
