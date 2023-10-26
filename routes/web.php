<?php

use App\Http\Controllers\Admin\AutkController;
use App\Http\Controllers\Admin\CategoriaController;
use App\Http\Controllers\Admin\ProductoController;
use App\Http\Controllers\CarritoController;
use App\Http\Controllers\InicioController;
use App\Http\Controllers\ProfileController;
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

// Route::get('/', function () {
//     return view('welcome');
// })->name('inicio');

Route::get('/', [InicioController::class, 'index'])->name('inicio');
Route::get('/inicio/productos/{categoria}', [InicioController::class, 'productosPorCategoria'])->name('inicio.productosPorCategoria');
Route::get('/inicio/producto/{producto}', [InicioController::class, 'producto'])->name('inicio.producto');

Route::post('/cart-add', [CarritoController::class, 'add'])->name('cart.add');
Route::get('/cart-checkout', [CarritoController::class, 'cart'])->name('cart.checkout');
Route::post('/cart-clear', [CarritoController::class, 'clear'])->name('cart.clear');
Route::post('/cart-removeitem', [CarritoController::class, 'removeitem'])->name('cart.removeitem');
Route::get('/cart-compra', [CarritoController::class, 'compra'])->name('cart.compra');

Route::post('/cart-compra-realizada', [CarritoController::class, 'compraRealizada'])->name('cart.compraRealizada');

// Route::get('/dashboard', function () {
//     return redirect()->route('inicio');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/dashboard', [AutkController::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::resource('/categorias',CategoriaController::class);
    Route::resource('/productos',ProductoController::class);
    Route::resource('/autk',AutkController::class);

});

require __DIR__.'/auth.php';
