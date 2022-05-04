<?php

use Illuminate\Support\Facades\Route;
Use App\Http\Controllers\ArtikelController;
Use App\Http\Controllers\WebinarController;
Use App\Http\Controllers\UserController;

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
    
    Route::get('webinar/edit/{webinar:id}', [WebinarController::class, 'edit'])->name('webinar.edit');
    Route::put('webinar/edit/{webinar:id}', [WebinarController::class, 'update'])->name('webinar.update');
    Route::delete('webinar/edit/{webinar:id}', [WebinarController::class, 'destroy'])->name('webinar.destroy');
    Route::post('webinar/insert', [WebinarController::class, 'store'])->name('webinar.store');
    Route::get('webinar/insert', [WebinarController::class, 'insert'])->name('webinar.insert');
    Route::get('webinar', [WebinarController::class, 'index'])->name('webinar');
    
    Route::get('user/edit/{user:username}', [UserController::class, 'edit'])->name('user.edit');
    Route::put('user/edit', [UserController::class, 'update'])->name('user.update');
    Route::delete('user/edit', [UserController::class, 'destroy'])->name('user.destroy');
});

require __DIR__.'/auth.php';
