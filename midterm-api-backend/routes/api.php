<?php

use App\Http\Controllers\GymInventoryController;
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


Route::get('/gymInventory',[GymInventoryController::class,'index']);
Route::get('gymInventory/{gymInventory}',[GymInventoryController::class,'show']);
Route::post('/gymInventory/store',[GymInventoryController::class,'store']);
Route::put('/gymInventory/edit/{id}',[GymInventoryController::class,'update']);
Route::delete('/gymInventory/delete/{id}',[GymInventoryController::class,'destroy']);
