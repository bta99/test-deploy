<?php

use App\Http\Controllers\api\ProductApiController;
use App\Http\Controllers\api\LoginApiController;
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

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::apiResource('productapi', ProductApiController::class);
Route::post('loginapi', [LoginApiController::class, 'login']);
Route::post('registerapi', [LoginApiController::class, 'register']);
Route::get('search', [ProductApiController::class, 'search']);
Route::post('add-message', [ProductApiController::class, 'addMessage']);
