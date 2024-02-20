<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return 'Selamat Datang';
    return view('welcome');
});

Route::get('/hello', function(){
    return 'Hello World';
});

Route::get('/world', function(){
    return 'World';
});

Route::get('/user/{name}', function($name){
    return 'Nama saya ' .$name;
});
Route::get('/posts/{post}/comments/{comment}', function($postId, $commentId){
    return 'Pos ke-' .$postId." Komenter ke-: ".$commentId;
});
Route::get('/articles/{id}', function($id){
    return 'Ini Halaman Artikel ke- ' .$id;
});