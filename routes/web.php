<?php

use Illuminate\Support\Facades\Route;
Use App\Http\Controllers\ArtikelController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::middleware('auth')->group(function () {
    Route::get('artikel/insert', [ArtikelController::class, 'insert'])->name('artikel.insert');
    Route::post('artikel/insert', [ArtikelController::class, 'store'])->name('artikel.store');
    Route::get('artikel/edit/{artikel:id}', [ArtikelController::class, 'edit'])->name('artikel.edit');
    Route::put('artikel/edit/{artikel:id}', [ArtikelController::class, 'update'])->name('artikel.update');
    Route::delete('artikel/edit/{artikel:id}', [ArtikelController::class, 'destroy'])->name('artikel.destroy');
    Route::get('artikel', [ArtikelController::class, 'index'])->name('artikel');
    Route::get('artikel/{artikel:id}', [ArtikelController::class, 'show']);
    
});

require __DIR__.'/auth.php';
