<?php

use App\Http\Controllers\MonkeyPoxTrackerController;
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

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::get('/mp-tracker',[MonkeyPoxTrackerController::class,'index']);
Route::get('/mp-tracker/{monkeyPoxTracker}',[MonkeyPoxTrackerController::class,'show']);
Route::post('/mp-tracker/store',[MonkeyPoxTrackerController::class,'store']);
Route::put('/mp-tracker/edit/{id}',[MonkeyPoxTrackerController::class,'update']);
Route::delete('/mp-tracker-delete/{id}',[MonkeyPoxTrackerController::class,'destroy']);
