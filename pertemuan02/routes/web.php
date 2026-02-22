<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return 'Selamat Datang';
});

Route::get('/helo', function (){
    return 'Hello World';
});

Route::get('/world', function(){
    return 'world';
});

Route::get('/about', function(){
    return 'NIM: 244107020053<br>NAMA:OTAVIA ULANDARI';
});