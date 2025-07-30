<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersDashboardController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('login',[
    UsersDashboardController::class,'Login'
]);
Route::get('register',[
    UsersDashboardController::class,'Register'
]);
