<?php

use App\Http\Controllers\ItemController;
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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/items', [ItemController::class, 'index'])->name('index');

Route::prefix('/item')->group( function(){
    Route::post('/store', [ItemController::class, 'store'])->name('store');
    Route::delete('/destroy/{id}', [ItemController::class, 'destroy'])->name('destroy');
    Route::put('/edit/{id}', [ItemController::class, 'update'])->name('update');

});
