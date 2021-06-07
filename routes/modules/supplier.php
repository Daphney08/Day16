<?php

use Illuminate\Support\Facades\Route;



Route::get('/supplier', [ 
     App\Http\Controllers\SupplierController::class, 'index'
     ])->name('supplier');


Route::get('/supplier/create', [ 
     App\Http\Controllers\SupplierController::class, 'create'
     ])->name('supplier.create');



Route::post('/supplier/create/save', [ 
     App\Http\Controllers\SupplierController::class, 'store' ])
->name('supplier.create.save');



Route::get('/supplier/edit/{id}', [
     App\Http\Controllers\SupplierController::class, 'edit' 
     ])->name('supplier.edit');



Route::post('/supplier/update/{id}', [ 
     App\Http\Controllers\SupplierController::class, 'update'
     ])->name('supplier.update');


Route::get('/supplier/delete/{id}', [ 
     App\Http\Controllers\SupplierController::class, 'delete' 
    ])->name('supplier.delete');

