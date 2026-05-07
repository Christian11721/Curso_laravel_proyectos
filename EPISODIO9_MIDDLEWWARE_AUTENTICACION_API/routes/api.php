<?php

use App\Http\Controllers\AuthoController;
use App\Http\Controllers\ExampleController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;



Route::get('/no-access',[ExampleController::class, 'noAccess'])->name('no-access');
Route::get('/',[ExampleController::class,'index']);
Route::post('/create', [AuthoController::class, 'createUser']);
Route::post('/login', [AuthoController::class, 'loginUser' ]);
Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');
