<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\BlogTagController;
use App\Http\Controllers\FrontController;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('/make-cv/{id}', [FrontController::class, 'cvManager'])
->name('cvmanager');


Route::apiResource('/blogs', BlogController::class);

Route::apiResource('/blog_category', BlogCategoryController::class);

Route::apiResource('/blog_tag', BlogTagController::class);


//Route::get('/blogs/{blog}', [BlogController::class, 'show']);
//Route::get('/blogs', [BlogController::class, 'index']);