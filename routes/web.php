<?php

use App\Http\Controllers\Api\PostApiController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PageController::class, "main"])->name('main');
Route::get('about', [PageController::class, "about"])->name("about");
Route::get('contact', [PageController::class, "contact"])->name("contact");

Route::get('login', [AuthController::class, 'login'])->name('login');
Route::post('authenticate', [AuthController::class, 'authenticate'])->name('authenticate');
Route::post('logout', [AuthController::class, 'logout'])->name('logout');
Route::get('register', [AuthController::class, 'register'])->name('register');
Route::post('register', [AuthController::class, 'register_store'])->name('register.store');




Route::apiResource('tests', PostApiController::class);

Route::resources([
    'posts' => PostController::class,
    'comments' => CommentController::class,
    'users' => UserController::class,
]);




/*
Route::get('latestNews', [PageController::class, "latestNews"])->name("latestNews");
Route::resource('posts', PostController::class);
Route::resource('comments', CommentController::class);
Route::get('/post', [PostController::class, 'index'])->name('posts.index');
Route::get('/show/create', [PostController::class, 'create'])->name('posts.create');
Route::post('/show/create', [PostController::class, 'store'])->name('posts.store');
Route::get('/show/{post}', [PostController::class, 'show'])->name('posts.show');
Route::get('/show/{post}/edit', [PostController::class, 'edit'])->name('posts.edit');
Route::put('/show/{post}/edit', [PostController::class, 'update'])->name('posts.update');
Route::delete('/show/{post}/delete', [PostController::class, 'delete'])->name('posts.delete');
Route::get('/welcome', [PageController::class, "welcome"]);
Route::get("/users", [UserController::class, "index"]);
Route::get("/users/create", [UserController::class, "create"]);
Route::get("/users/{user}", [UserController::class, "show"]);
Route::get("/users/{user}/edit", [UserController::class, "edit"]);
Route::post("/user-create", [UserController::class, "store"]);
*/
