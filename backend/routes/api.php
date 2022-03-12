<?php

use App\Http\Controllers\Rent\TypeController;
use App\Http\Controllers\Rent\CategoryController;
use App\Http\Controllers\Rent\ItemController;
use App\Http\Controllers\Rent\LocationController;
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

Route::group(['prefix' => 'rent'], function() {
    Route::resource("types", TypeController::class);
    Route::resource("categories", CategoryController::class);
    Route::resource("locations", LocationController::class);
    Route::resource("items", ItemController::class);
});