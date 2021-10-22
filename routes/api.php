<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestApiController;
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
//here we will create the apis routes

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

//kda lw 3mlt call ll api def hyrg3ly el response el feh el controller el fe el method bta3t firstApi
Route::post('create-contact',[TestApiController::class,'index']);


?>