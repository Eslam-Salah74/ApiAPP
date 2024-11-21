<?php

use App\Http\Controllers\Api\PostController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

// Return All Posts
Route::get('posts',[PostController::class,'index'])->name('posts');
// Return All Posts Using Resource
Route::get('postsResource',[PostController::class,'postsResource'])->name('postsResource');
// Return One Post
Route::get('post/{id}',[PostController::class,'show'])->name('post');
// Return One Post Using Resource
Route::get('postResource/{id}',[PostController::class,'postResource'])->name('post');


// Store Data
Route::post('store',[PostController::class,'store'])->name('store');


