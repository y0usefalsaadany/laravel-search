<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostsController;

Route::get('/', [PostsController::class,'show']);
Route::get('find', [PostsController::class,'find']);