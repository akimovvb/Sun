<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\TagController;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('posts')->group(function () {
    Route::get('index', [PostController::class, 'index']);
    Route::get('{post}/show', [PostController::class, 'show']);
    Route::get('/', [PostController::class, 'store']);
    Route::get('{post}/update', [PostController::class, 'update']);
    Route::get('{post}/destroy', [PostController::class, 'destroy']);
});

Route::prefix('category')->group(function () {
    Route::get('index', [CategoryController::class, 'index']);
    Route::get('{category}/show', [CategoryController::class, 'show']);
    Route::get('/', [CategoryController::class, 'store']);
    Route::get('{category}/update', [CategoryController::class, 'update']);
    Route::get('{category}/destroy', [CategoryController::class, 'destroy']);
});

Route::prefix('comments')->group(function () {
    Route::get('index', [CommentController::class, 'index']);
    Route::get('{comment}/show', [CommentController::class, 'show']);
    Route::get('/', [CommentController::class, 'store']);
    Route::get('{comment}/update', [CommentController::class, 'update']);
    Route::get('{comment}/destroy', [CommentController::class, 'destroy']);
});



Route::prefix('profiles')->group(function () {
    Route::get('index', [ProfileController::class, 'index']);
    Route::get('{profile}/show', [ProfileController::class, 'show']);
    Route::get('/', [ProfileController::class, 'store']);
    Route::get('{profile}/update', [ProfileController::class, 'update']);
    Route::get('{profile}/destroy', [ProfileController::class, 'destroy']);
});

Route::prefix('roles')->group(function () {
    Route::get('index', [RoleController::class, 'index']);
    Route::get('{role}/show', [RoleController::class, 'show']);
    Route::get('/', [RoleController::class, 'store']);
    Route::get('{role}/update', [RoleController::class, 'update']);
    Route::get('{role}/destroy', [RoleController::class, 'destroy']);
});

Route::prefix('tags')->group(function () {
    Route::get('index', [TagController::class, 'index']);
    Route::get('{tag}/show', [TagController::class, 'show']);
    Route::get('/', [TagController::class, 'store']);
    Route::get('{tag}/update', [TagController::class, 'update']);
    Route::get('{tag}/destroy', [TagController::class, 'destroy']);
});

Route::prefix('users')->group(function () {
    Route::get('index', [UserController::class, 'index']);
    Route::get('{user}/show', [UserController::class, 'show']);
    Route::get('/', [UserController::class, 'store']);
    Route::get('{user}/update', [UserController::class, 'update']);
    Route::get('{user}/destroy', [UserController::class, 'destroy']);
});





