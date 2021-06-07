<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DistributionController;


Route::get('/distribution', [ 
    DistributionController::class, 'index' 
    ])->name('distribution');


Route::get('/distribution/create', [ 
    DistributionController::class, 'create'
     ])->name('distribution.create');



Route::post('/distribution/create/save', 
[ DistributionController::class, 'store' ])
->name('distribution.create.save');



Route::get('/distribution/edit/{id}', [
     DistributionController::class, 'edit' 
     ])->name('distribution.edit');



Route::post('/distribution/update/{id}', [
     DistributionController::class, 'update' 
     ])->name('distribution.update');


Route::get('/distribution/delete/{id}', [ 
    DistributionController::class, 'delete' 
    ])->name('distribution.delete');

