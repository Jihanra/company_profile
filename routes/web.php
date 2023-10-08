<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    //return view('home.index');
    $data = [
        'content' => 'home/home/index'
    ];
    return view('home.layouts.wrapper', $data);
});

Route::get('/About Us', function () {
    $data = [
        'content' => 'home/about/index'
    ];
    return view('home.layouts.wrapper', $data);
});


Route::get('/Our Service', function () {
    $data = [
        'content' => 'home/service/index'
    ];
    return view('home.layouts.wrapper', $data);
});

Route::get('/Contact Us', function () {
    $data = [
        'content' => 'home/contact/index'
    ];
    return view('home.layouts.wrapper', $data);
});
