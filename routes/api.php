<?php

use App\Http\Controllers\Api\LoginController;
use App\Http\Controllers\Api\PostController;
use App\Http\Controllers\Api\RegisterController;
use App\Http\Controllers\Api\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::post('register', [RegisterController::class, 'register']);
Route::post('login', [LoginController::class, 'login']);
Route::get('user', [UserController::class, 'index'])->middleware('auth:api');

Route::get('post', [PostController::class, 'index'])->middleware('auth:api');
Route::post('post', [PostController::class, 'store'])->middleware('auth:api');
Route::get('post/{post}', [PostController::class, 'show'])->middleware('auth:api');
Route::put('post/{post}', [PostController::class, 'update'])->middleware('auth:api');
Route::delete('post/{post}', [PostController::class, 'destroy'])->middleware('auth:api');
