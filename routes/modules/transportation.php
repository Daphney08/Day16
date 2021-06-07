<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TransportationController;


Route::get('/transportation', [ 
    TransportationController::class, 'index' 
    ])->name('transportation');


Route::get('/transportation/create', [ 
    TransportationController::class, 'create'
     ])->name('transportation.create');



Route::post('/transportation/create/save', 
[ TransportationController::class, 'store' ])
->name('transportation.create.save');



Route::get('/transportation/edit/{id}', [
     TransportationController::class, 'edit' 
     ])->name('transportation.edit');



Route::post('/transportation/update/{id}', [
     TransportationController::class, 'update' 
     ])->name('transportation.update');


Route::get('/transportation/delete/{id}', [ 
    TransportationController::class, 'delete' 
    ])->name('transportation.delete');

