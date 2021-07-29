<?php

use App\Http\Controllers\StoreController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

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

/*Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});*/

Route::group([

    'middleware' => ['jwt.verify'],
    'prefix' => 'v1'

], function ($router) {

    Route::post('/login',[AuthController::class,'login'])->name('login');
    Route::get('/stores',[StoreController::class,'index'])->name('index');
    Route::post('/stores',[StoreController::class,'store'])->name('store');
    Route::put('/stores/{id}',[StoreController::class,'update'])->name('update');
    Route::delete('/stores/{id}',[StoreController::class,'destroy'])->name('delete');

});


