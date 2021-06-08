<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SupplierController;



Route::get('/supplier', [ 
     SupplierController::class, 'index'
     ])->name('supplier');


Route::get('/supplier/create', [ 
     SupplierController::class, 'create'
     ])->name('supplier.create');



Route::post('/supplier/create/save', [ 
     SupplierController::class, 'store' ])
->name('supplier.create.save');



Route::get('/supplier/edit/{id}', [
    SupplierController::class, 'edit' 
     ])->name('supplier.edit');



Route::post('/supplier/update/{id}', [ 
     SupplierController::class, 'update'
     ])->name('supplier.update');


Route::get('/supplier/delete/{id}', [ 
     SupplierController::class, 'delete' 
    ])->name('supplier.delete');

