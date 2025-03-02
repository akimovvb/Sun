<?php

use App\Http\Controllers\Api\PostController;
use App\Http\Controllers\Api\CommentController;
use App\Http\Controllers\Api\CategoryController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;



Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

//Route::apiResource('posts', PostController::class);

Route::get('/posts', [PostController::class, 'index']);
Route::post('/posts', [PostController::class, 'store']);
Route::get('/posts/{post}', [PostController::class, 'show']);
Route::patch('/posts/{post}', [PostController::class, 'update']);
Route::delete('/posts/{post}', [PostController::class, 'destroy']);



Route::prefix('comments')->group(function () {
    Route::get('/index', [CommentController::class, 'index']);
    Route::get('{comment}/show', [CommentController::class, 'show']);
    Route::post('/', [CommentController::class, 'store']);
    Route::patch('{comment}/update', [CommentController::class, 'update']);
    Route::delete('{comment}/destroy', [CommentController::class, 'destroy']);
    });

    Route::prefix('category')->group(function () {
        Route::get('index', [CategoryController::class, 'index']);
        Route::get('{category}/show', [CategoryController::class, 'show']);
        Route::post('/', [CategoryController::class, 'store']);
        Route::patch('{category}/update', [CategoryController::class, 'update']);
        Route::delete('{category}/destroy', [CategoryController::class, 'destroy']);
    });



