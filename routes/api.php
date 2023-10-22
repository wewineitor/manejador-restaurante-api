<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

Route::post('login', 'App\Http\Controllers\AuthController@login');
Route::post('logout', 'App\Http\Controllers\AuthController@logout');
Route::post('refresh', 'App\Http\Controllers\AuthController@refresh');
Route::post('me', 'App\Http\Controllers\AuthController@me');
Route::post('register', 'App\Http\Controllers\AuthController@register');
Route::delete("delete/{id}", [AuthController::class, 'delete']);
Route::get("show", [AuthController::class, 'show']);

/*Route::middleware('jwt.verify')->group(function () {
    Route::delete("delete/{id}", [AuthController::class, 'delete']);
});*/