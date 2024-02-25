<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\UserProfileController;

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

// Route::get('/user/{name}', function($name){
//     return 'Nama saya ' .$name;
// });

Route::get('/posts/{post}/comments/{comment}', function($postId, $commentId){
    return 'Pos ke-' .$postId." Komenter ke-: ".$commentId;
});

Route::get('/articles/{id}', function($id){
    return 'Ini Halaman Artikel ke- ' .$id;
});

Route::get('/user/{name?}', function($name=null){
    return 'Nama saya ' .$name;
});

Route::get('/user/{name?}', function($name='John'){
    return 'Nama saya ' .$name;
});

Route::get('/user/profile', function() {

})->name('profile');

Route::get('user/profile', [UserProfileController::class, 'show'])->name('profile');


Route::middleware(['first', 'second'])->group(function() {
    Route::get('/', function() {
        // Uses first & second middleware...
    });
    Route::get('/user/profile', function() {
        // Uses first & second middleware...
    });
});
Route::domain('{account}.example.com')->group(function() {
    Route::get('user/{id}', function($account, $id) {
        //
    });
});
Route::middleware('auth')->group(function() {
    Route::get('/user', [UserController::class, 'index']);
    Route::get('/post', [PostController::class, 'index']);
    Route::get('/event', [EventController::class, 'index']);
});
Route::prefix('admin')->group(function() {
    Route::get('/user', [UserController::class, 'index']);
    Route::get('/post', [PostController::class, 'index']);
    Route::get('/event', [EventController::class, 'index']);
});