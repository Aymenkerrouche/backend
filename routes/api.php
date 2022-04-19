<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\OfferController;
use App\Models\Agency;
use App\Models\Offer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Client;
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

Route::post('/clients', function (){
    return Client::all();
});

Route::post('/agencies', function (){
    return Agency::all();
});

Route::get('/offers/search/{name}', [OfferController::class, 'search']);

Route::resource('offers', OfferController::class);
Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);

//Route::post('/offerAdd',[OfferController::class, 'store']);

//Route::post('/offers', [OfferController::class, 'index']);
