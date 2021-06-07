<?php

use Illuminate\Support\Facades\Route;

Route::get('/', [
    App\Http\Controllers\LoginController::class,
    'index'
])->name('create');

Route::get('/return', [
    App\Http\Controllers\LoginController::class,
    'return'
])->name('return');

Route::get('/delivery', [
    App\Http\Controllers\LoginController::class,
    'delivery'
])->name('delivery');

Route::get('/transportation', [
    App\Http\Controllers\LoginController::class,
    'transportation'
])->name('transportation');

Route::get('/distribution', [
    App\Http\Controllers\LoginController::class,
    'distribution'
])->name('distribution');

Route::get('/asset', [
    App\Http\Controllers\LoginController::class,
    'asset'
])->name('asset');

Route::get('/storage', [
    App\Http\Controllers\LoginController::class,
    'storage'
])->name('storage');

Route::get('/supplier ', [
    App\Http\Controllers\LoginController::class,
    'supplier '
])->name('supplier');