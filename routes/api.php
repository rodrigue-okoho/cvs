<?php

use App\Http\Controllers\BlogCategoryController;
use App\Http\Controllers\BlogCommentController;
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
Route::get('/make-cv/{id}/{typecv}', [FrontController::class, 'cvManager'])
->name('cvmanager');
Route::post('/upload-image', [FrontController::class, 'uploadPhoto'])
    ->name('uploadcandidatimage');

Route::apiResource('/blogs', BlogController::class);

Route::apiResource('/blog_category', BlogCategoryController::class);

Route::apiResource('/blog_tag', BlogTagController::class);
Route::apiResource('/blog_comments', BlogCommentController::class);

//Route::get('/blogs/{blog}', [BlogController::class, 'show']);
//Route::get('/blogs', [BlogController::class, 'index']);
