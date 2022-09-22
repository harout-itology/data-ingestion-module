<?php

use App\Http\Controllers\YouTubeVideoController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ReportTypeController;

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

Route::get('/youtube/{id}', [YouTubeVideoController::class, 'show'])->name('youtube.show');

Route::get('/reporttype/', [ReportTypeController::class, 'index'])->name('youtube.index');

