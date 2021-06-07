<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DeliveryController;


Route::get('/delivery', [ 
    DeliveryController::class, 'index' 
    ])->name('delivery');


Route::get('/delivery/create', [ 
    DeliveryController::class, 'create'
     ])->name('delivery.create');



Route::post('/delivery/create/save', 
[ DeliveryController::class, 'store' ])
->name('delivery.create.save');



Route::get('/delivery/edit/{id}', [
     DeliveryController::class, 'edit' 
     ])->name('delivery.edit');



Route::post('/delivery/update/{id}', [
     DeliveryController::class, 'update' 
     ])->name('delivery.update');


Route::get('/delivery/delete/{id}', [ 
    DeliveryController::class, 'delete' 
    ])->name('delivery.delete');

