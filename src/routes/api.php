<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Post;
use App\Http\Controllers\PostController;

Route::get('/v1/books/list', function() {
    $data = Post::select('book', 'author')->get();
    return response()->json($data, 200);
});

Route::get('/v1/books/by-id', function() {
    $data = Post::select('id', 'book')->get();
    return response()->json($data, 200);
});

Route::post('/v1/books/update', [PostController::class, 'upd']);

Route::delete('/v1/books/id', [PostController::class, 'del']);

Route::fallback(function () {
    abort(404, 'API resource not found');
});
