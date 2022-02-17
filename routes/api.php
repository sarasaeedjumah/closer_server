<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Locations\UserController;
use App\Events\userlocation;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\NewController;
use App\Http\Controllers\AuthController;
use GuzzleHttp\Middleware;
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

 Route::group(['middleware'=>['auth:sanctum']],function(){

  Route::get('/te',function(){

    return "  HI";


  });

  Route::get('/search{$name}',[ AuthController::class, 'search'] );
 });

 Route::post('/register',[ AuthController::class, 'register'] );

 Route::get('user_Loc', [ UserController::class, 'getLocations']);

/***  new Middleware */
Route::group(['middleware' => ['api', 'Userdata']],function(){
    Route::post('api_user', [ UserController::class, 'getUserlocation']);
    /** for channel public location */


});

        Route::post('userlocation', [ HomeController::class, 'saveLocation']);
        Route::resource('test', NewController::class);




