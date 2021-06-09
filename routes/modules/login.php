<?php

use Illuminate\Support\Facades\Route;

Route::group(['middleware' => 'user'], function(){
    Route::get('/', [
        App\Http\Controllers\LoginController::class,
        'index'
    ])->name('app');

    Route::get('/logout', [
        App\Http\Controllers\LoginController::class,
        'logout'
    ])->name('app.logout');

    Route::get('/chat', [
        App\Http\Controllers\LoginController::class,
        'chat'
    ])->name('app.chat');

    Route::post('/chat/send', [
        App\Http\Controllers\LoginController::class,
        'chat_send'
    ])->name('app.chat.send');

  
});
Route::group(['middleware' => 'guest'], function(){
    Route::get('/login', [
        App\Http\Controllers\LoginController::class,
        'login'
    ])->name('app.login');

    Route::post('/login/verify', [
        App\Http\Controllers\LoginController::class,
        'login_verify'
    ])->name('app.login.verify');


    Route::get('/registration', [
        App\Http\Controllers\LoginController::class,
        'registration'
    ])->name('app.registration');


    Route::post('/registration/verify', [
        App\Http\Controllers\LoginController::class,
        'registration_verify'
    ])->name('app.registration.verify');

    

});