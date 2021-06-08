<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SupplierController;


Route::get('/asset', [ 
    SupplierController::class, 'index' 
    ])->name('asset');


Route::get('/asset/create', [ 
    SupplierController::class, 'create'
     ])->name('asset.create');



Route::post('/asset/create/save', 
[ SupplierController::class, 'store' ])
->name('asset.create.save');



Route::get('/asset/edit/{id}', [
     SupplierController::class, 'edit' 
     ])->name('asset.edit');



Route::post('/asset/update/{id}', [
     SupplierController::class, 'update' 
     ])->name('asset.update');


Route::get('/asset/delete/{id}', [ 
    SupplierController::class, 'delete' 
    ])->name('asset.delete');

