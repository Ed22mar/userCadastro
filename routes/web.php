<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use Illuminate\View\View;

Route::middleware('guest')->group(function(){
    Route::get('/register',[AuthController::class,'showRegister'])->name('register');
    Route::post('/register',[AuthController::class, 'register']);

    Route::get('/login',[AuthController::class,'showLogin'])->name('login');
    Route::post('/login', [AuthController::class, 'Login']);

});
//logout
Route::post('/logout',[AuthController::class,'logout'])->name('logout')->middleware('auth');


//Routa Home
Route::get('/home',function(){
    return View('home');
})->name('home')->middleware('auth');


//Redirecionamento da raiz
Route::get('/', function(){
    return auth()->check()
        ? redirect()->route('home')
        : redirect()->route('login');
});
