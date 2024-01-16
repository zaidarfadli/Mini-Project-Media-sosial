<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\BookmarkController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ReplyController;
use App\Http\Controllers\UserController;
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

// HANYA BISA DIAKSES JIKA ORANG ITU BELUM LOGIN
Route::group(['middleware' => 'guest'], function () {

    // UNTUK PINDAH KE HALAMAN LOGIN DAN REGiSTRASI
    Route::get('/login', [AuthController::class, 'formLogin'])->name('login');
    Route::get('/registrasi', [AuthController::class, 'formRegistrasi'])->name('registrasi');
});

// UNTUK MELAKUKAN LOGIN DAN REGISTRASI
Route::post('/login', [AuthController::class, 'login'])->name('action_login');
Route::post('/registrasi', [AuthController::class, 'registrasi'])->name('action_registrasi');




Route::get('/', [HomeController::class, 'index']);
Route::get('/seePost/{post}', [PostController::class, 'seePost'])->name('seePost');



// HANYA BISA DIAKSES JIKA ORANG ITU SUDAH LOGIN
Route::group(['middleware' => 'auth'], function () {
    Route::get('/home', [HomeController::class, 'index'])->name('home');
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');


    // ALL POSTINGAN ROUTE
    Route::get('/formPost', [HomeController::class, 'formPost'])->name('formPost');
    Route::post('/createPost', [PostController::class, 'createPost'])->name('createPost');
    Route::delete('/deletePost/{post}', [PostController::class, 'deletePost'])->name('deletePost');


    // ALL COMMENT ROUTE
    Route::post('/sendComment/{post}', [CommentController::class, 'sendComment'])->name('sendComment');
    Route::delete('/deleteComment/{post}/{comment}', [CommentController::class, 'deleteComment'])->name('deleteComment');

    // ALL REPLY ROUTE
    Route::post('/sendReply/{post}/{comment}', [ReplyController::class, 'sendReply'])->name('sendReply');
    Route::delete('/deleteReply/{reply}', [ReplyController::class, 'deleteReply'])->name('deleteReply');


    // ALL ROOUTE PROFILE
    Route::get('/MyProfile', [UserController::class, 'myProfile'])->name('myProfile');
    Route::get('/Profile/{user}', [UserController::class, 'seeProfile'])->name('seeProfile');


    // All Route Bookmark
    Route::get('/MyBookmark', [BookmarkController::class, 'index'])->name('myBookmark');
    Route::post('/addBookmark/{post}', [BookmarkController::class, 'addBookmark'])->name('addBookmark');
});
