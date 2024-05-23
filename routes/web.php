<?php

use App\Http\Controllers\homeController;
use App\Http\Controllers\inventoryController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

//ruta home
Route::get('/', homeController::class)->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::controller(inventoryController::class)->group(function(){

    Route::get('inventory/create', 'create')->name('inventory.create');

    /**
     * Route to show the save viwe
     */
    Route::get('inventory/show', 'show')->name('inventory.show');

    /**
     * Route to show the save viwe
     */
    Route::post('inventory/showProduc', 'showProduc')->name('inventory.showProduc');

    /**
     * 
     * route to save items
     */
    Route::post('inventory/store', 'store')->name('inventory.store');

    /**
     * Route to show edit form
     */
    Route::get('inventory/{produc}/edit', 'edit')->name('inventory.edit');
    /**
     * Route to update item
     */
    Route::put('inventory/{produc}/update', 'update')->name('inventory.update');

    /**
     * Route view register inventory movements
     */
    Route::get('inventory/{produc}/movements', 'movements')->name('inventory.move');

    /**
     * Route register items Move
     */
    Route::post('inventory/{produc}/storeMove', 'storeMove')->name('inventory.storeMove');

    /**
     * Route show view History
     */
    Route::get('inventory/record', 'record')->name('inventory.record');
});
