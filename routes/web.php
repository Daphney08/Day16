<?php



use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SupplierController;

 //resource route
 Route::resource('suppliers',SupplierController::class);

Route::group(['middleware' => 'guest'], function() {
     //resource route
    Route::resource('suppliers',SupplierController::class);
    //supplier
    Route::get('/',[App\Http\Controllers\CreateController::class,'index'])->name('create');
    //return
    Route::get('/return',[App\Http\Controllers\CreateController::class,'return'])->name('return');

});


// Route::get('/', [
//     App\Http\Controllers\CreateController::class,
//     'index'
// ])->name('create');


// Route::get('/return', [
//     App\Http\Controllers\LoginController::class,
//     'return'
// ])->name('return');

// Route::get('/delivery', [
//     App\Http\Controllers\LoginController::class,
//     'delivery'
// ])->name('delivery');

// Route::get('/transportation', [
//     App\Http\Controllers\LoginController::class,
//     'transportation'
// ])->name('transportation');

// Route::get('/distribution', [
//     App\Http\Controllers\LoginController::class,
//     'distribution'
// ])->name('distribution');

// Route::get('/asset', [
//     App\Http\Controllers\LoginController::class,
//     'asset'
// ])->name('asset');

// Route::get('/storage', [
//     App\Http\Controllers\LoginController::class,
//     'storage'
// ])->name('storage');

// Route::get('/supplier ', [
//     App\Http\Controllers\LoginController::class,
//     'supplier '
// ])->name('supplier');