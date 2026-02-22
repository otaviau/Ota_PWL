<?php

use App\Http\Controllers\PageController;
use App\Http\Controllers\WellcomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PageController::class, 'index']);

Route::get('/about', [PageController::class, 'about']);

Route::get('/articles/{id}', [PageController::class, 'articles']);

Route::get('/helo', function (){
    return 'Hello World';
});

Route::get('/world', function(){
    return 'world';
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

Route::get('/hello', [WellcomeController::class, 'hello']);