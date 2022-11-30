<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

Route::get('/', [PostController::class, 'home']);

Route::get('/admin', [PostController::class, 'admin']);

Route::delete('/delete/{id}', [PostController::class, 'delete']);

Route::get('/createform', [PostController::class, 'createform']);

Route::post('/create', [PostController::class, 'create']);

Route::get('/updateform/{id}', [PostController::class, 'updateform']);

Route::post('/update/{id}', [PostController::class, 'update']);

Route::get('/countbooks', [PostController::class, 'countbooks']);

Route::get('/showbooks', [PostController::class, 'showbooks']);
