<?php

use App\Http\Controllers\UserController;
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

Route::group([
    'prefix' => 'users'
], function (){
    Route::post('/createUser', [UserController::class, 'createUser']);
    Route::get('/getUser', [UserController::class, 'getUser']);
    Route::post('/getUserById', [UserController::class, 'getUserById']);
});
