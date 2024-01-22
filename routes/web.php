<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\BookmarkController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\FollowController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LikeController;
use App\Http\Controllers\NotifController;
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

// All route searching/EXPLORE
Route::get('/explorePeople', [UserController::class, 'explorePeople'])->name('explorePeople');
Route::get('/searching', [UserController::class, 'explorePeople'])->name('search');
Route::get('/Profile/{people}', [UserController::class, 'seeProfile'])->name('seeProfile');
Route::get('/home', [HomeController::class, 'index'])->name('home');


// HANYA BISA DIAKSES JIKA ORANG ITU SUDAH LOGIN
Route::group(['middleware' => 'auth'], function () {

    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

    Route::get('/home2', [HomeController::class, 'indexMyFollowing'])->name('home2');
    Route::get('/explore', [HomeController::class, 'searchRoute'])->name('searchRoute');

    // ALL POSTINGAN ROUTE
    Route::get('/formPost', [PostController::class, 'formPost'])->name('formPost');
    Route::post('/createPost', [PostController::class, 'createPost'])->name('createPost');
    Route::delete('/deletePost/{post}', [PostController::class, 'deletePost'])->name('deletePost');

    // ALL COMMENT ROUTE
    Route::post('/sendComment/{post}', [CommentController::class, 'sendComment'])->name('sendComment');
    Route::delete('/deleteComment/{post}/{comment}', [CommentController::class, 'deleteComment'])->name('deleteComment');

    // ALL REPLY ROUTE
    Route::post('/sendReply/{post}/{comment}', [ReplyController::class, 'sendReply'])->name('sendReply');
    Route::delete('/deleteReply/{comment}/{reply}', [ReplyController::class, 'deleteReply'])->name('deleteReply');


    // ALL ROUTE PROFILE
    Route::get('/MyProfile', [UserController::class, 'myProfile'])->name('myProfile');
    Route::get('/formConfirmPassword', [UserController::class, 'formConfirmPassword'])->name('formConfirmPassword');
    Route::post('/confirmPassword', [UserController::class, 'confirmPassword'])->name('confirmPassword');
    Route::get('/editProfile', [UserController::class, 'editProfileForm'])->name('editProfileForm');
    Route::put('/editProfile', [UserController::class, 'editProfile'])->name('editProfile');
    Route::post('/confirmPassword', [UserController::class, 'confirmPassword'])->name('confirmPassword');

    // All Route Follow
    Route::post('/follow/{people}', [FollowController::class, 'follow'])->name('follow');
    Route::delete('/deleteFollower/{people}', [FollowController::class, 'deleteFollower'])->name('deleteFollower');
    Route::get('/seeFollower/{people}', [FollowController::class, 'seeFollower'])->name('seeFollower');
    Route::get('/seeFollowing/{people}', [FollowController::class, 'seeFollowing'])->name('seeFollowing');
    Route::get('/searchFollower/{people}', [FollowController::class, 'seeFollower'])->name('searchFollower');
    Route::get('/searchFollowing/{people}', [FollowController::class, 'seeFollowing'])->name('searchFollowing');

    // All Route Bookmark
    Route::get('/MyBookmark', [BookmarkController::class, 'index'])->name('myBookmark');
    Route::post('/addBookmark/{post}', [BookmarkController::class, 'addBookmark'])->name('addBookmark');

    // All route Like
    Route::post('/likePost/{post}', [LikeController::class, 'likePost'])->name('likePost');
    Route::get('seeWhoLike/{post}', [LikeController::class, 'seeWhoLike'])->name('seeWhoLike');
    Route::post('/likeComment/{post}/{comment}', [LikeController::class, 'likeComment'])->name('likeComment');

    // All Route Notifikasi
    Route::get('/myNotifikasi', [NotifController::class, 'myNotifikasi'])->name('myNotifikasi');
});
