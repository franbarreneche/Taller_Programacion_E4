<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RecetaController;

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
    return redirect()->route('recetas');
});

Route::get('/recetas',[RecetaController::class,'index'])->name('recetas');

Route::get('/recetas/create',[RecetaController::class,'create'])->name('recetas.create');

Route::post('/recetas/store',[RecetaController::class,'store'])->name('recetas.store');

Route::get('/recetas/{id}',[RecetaController::class,'show'])->name('recetas.show');

Route::delete('/recetas/{id}',[RecetaController::class,'destroy'])->name('recetas.destroy');
