<?php

use App\Http\Controllers\Api\AuthorController;
use App\Http\Controllers\Api\GenreController;
use App\Http\Controllers\Api\SongController;
use App\Http\Controllers\Api\UserableController;
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

Route::apiResources([
    'songs' => SongController::class,
    'genres' => GenreController::class,
    'authors' => AuthorController::class,
]);

