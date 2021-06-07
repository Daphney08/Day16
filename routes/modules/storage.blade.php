<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StorageController;


Route::get('/storage', [ 
    StorageController::class, 'index' 
    ])->name('storage');


Route::get('/storage/create', [ 
    StorageController::class, 'create'
     ])->name('storage.create');



Route::post('/storage/create/save', 
[ StorageController::class, 'store' ])
->name('storage.create.save');



Route::get('/storage/edit/{id}', [
     StorageController::class, 'edit' 
     ])->name('storage.edit');



Route::post('/storage/update/{id}', [
     StorageController::class, 'update' 
     ])->name('storage.update');


Route::get('/storage/delete/{id}', [ 
    StorageController::class, 'delete' 
    ])->name('storage.delete');

