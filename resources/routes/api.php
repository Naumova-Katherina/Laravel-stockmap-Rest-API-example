<?php

use App\Http\Controllers\Api\StockmapIndexController;
use App\Http\Controllers\Api\ImoexRatesController;
use App\Http\Controllers\Api\MarketRatesController;
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

    Route::get('stockmap/indexes/{period}/{sort}', [StockmapIndexController::class, 'index']);

    Route::get('stockmap/imoex/{period}/{sort}', [ImoexRatesController::class, 'index']);

    Route::get('stockmap/market/{period}/{sort}', [MarketRatesController::class, 'index']);

