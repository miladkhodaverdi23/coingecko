<?php

use App\Http\Controllers\CoinController;
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
Route::name('v1.')->prefix('v1')->group(function () {
    Route::get('get/coin',[CoinController::class,'ajax'])->name('get.coin');
});
