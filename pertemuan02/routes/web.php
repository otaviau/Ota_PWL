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

Route::get('/user/{name}', function($name){
    return 'Nama Saya '.$name;
});

Route::get('/post/{post}/comments/{coment}', 
function($postId, $commentId){
    return 'Pos ke-'.$postId.' Komentar ke:- '.$commentId;
});

// Route::get('/user/{name?}', function($name=null){
//     return 'Nama Saya: '.$name;
// });

Route::get('/user/{name?}', function($name='John'){
    return 'Nama Saya: '.$name;
});