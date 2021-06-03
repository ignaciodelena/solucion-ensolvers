<?php
use App\Http\Controllers\ItemsController;
use App\Http\Controllers\FoldersController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



Route::get('/', [ItemsController::class, 'index'])->name('item.index');
Route::post('/store', [ItemsController::class, 'store'])->name('item.store');
Route::get('/{id}/edit',[ItemsController::class, 'edit'])->name('item.edit');;
Route::delete('/{id}', [ItemsController::class, 'destroy'])->name('item.destroy');
Route::patch('/{id}', [ItemsController::class, 'update'])->name('item.update');

