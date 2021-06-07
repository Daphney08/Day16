<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ReturnController;


Route::get('/return', [ 
    ReturnController::class, 'index' 
    ])->name('return');


Route::get('/return/create', [ 
    ReturnController::class, 'create'
     ])->name('return.create');



Route::post('/return/create/save', 
[ ReturnController::class, 'store' ])
->name('return.create.save');



Route::get('/return/edit/{id}', [
     ReturnController::class, 'edit' 
     ])->name('return.edit');



Route::post('/return/update/{id}', [
     ReturnController::class, 'update' 
     ])->name('return.update');


Route::get('/return/delete/{id}', [ 
    ReturnController::class, 'delete' 
    ])->name('return.delete');

