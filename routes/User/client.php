<?php
use Illuminate\Support\Facades\Route;
use App\Events\userlocation;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Locations\UserController;

/** for user register */
Route::post('user_sign', [ UserController::class, 'create']);
Route::post('User-data', [UserController::class, 'get']);
