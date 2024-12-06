<?php

use App\Http\Controllers\RoleController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;



Route::post('/users', [UserController::class, 'store']);
Route::get('/roles', [RoleController::class, 'index']);
