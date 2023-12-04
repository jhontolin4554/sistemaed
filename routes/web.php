<?php

use App\Http\Controllers\ProfileController;

use App\Http\Controllers\admin\ProductoController;
use Illuminate\Database\Eloquent\Model;
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

Route::get('/', function () {
    return view('usuario.inicio');
});


Route::get('/verpantalones/{id}', [ProductoController::class, 'index2'])->name('admin.producto.index2');

Route::post('productos/{id}', [ProductoController::class, 'update'])->name('admin.producto.update');


Route::get('/produto/creacion', function () {
    return view('admin.producto.create');
});
Route::get('/generar-pdf/{id}', [ProductoController::class, 'generarPDF'])->name('admin.producto.generarPDF');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
Route::resource('/productos',ProductoController::class)->names('admin.producto');

