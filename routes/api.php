<?php

use App\Http\Controllers\InventoryController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');
*/


//Backend Route
Route::prefix('/inventory')->group(function(){
    Route::get('/index', [InventoryController::class, 'index']);
    Route::post('/delete', [InventoryController::class, 'delete']);
    Route::post('/search', [InventoryController::class, 'search']);
    Route::post('/create', [InventoryController::class, 'create']);
    Route::post('/update', [InventoryController::class, 'update']);
});
