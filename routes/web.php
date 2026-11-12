<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', fn () =>view('auth.login'))->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::group(['middleware' => ['auth', 'check_role:costumer']], function (){
    Route::get('/costumer', fn () => 'testing');
}); 
Route::group(['middleware' => ['auth', 'check_role:admin,staff']], function (){
    Route::get('/dashboard', [DashboardController::class,'index']);
}); 
Route::get('/logout', [AuthController::class, 'logout']);

Route::get('/calendar', function (){
    return view('/calendar');
});