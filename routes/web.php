<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\BuyController;
use App\Http\Controllers\CallController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\FavoritesUserController;
use App\Http\Controllers\SearchController;
use App\Models\Call;
use App\Models\Contact;
use Illuminate\Support\Facades\Auth;
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

///////////////////////////////   rutas de la pagina principal   ////////////////////////////

// ir al index de biblioteca
Route::get('/biblioteca', [BookController::class, 'index']);

// ir al show de biblioteca
Route::get('/biblioteca/{id}', [BookController::class, 'show'])->name('biblioteca.show');

////////////////////////////////////  rutas de categoria   ///////////////////////////////////

// ir al index de categoria
Route::get('/categorias', [CategoryController::class, 'index'])->name('categorias.index');

//ir al show de categoria
Route::get('/categorias/{id}', [CategoryController::class, 'show'])->name('categorias.show');

//////////////////////////////////////  rutas carrito /////////////////////////////////////////

// par el carrito
Route::post('cart/add', [CartController::class, 'add'])->name('add');
Route::get('cart/checkout', [CartController::class, 'checkout'])->name('checkout');
Route::get('cart/clear', [CartController::class, 'clear'])->name('clear');
Route::post('cart/removeitem', [CartController::class, 'removeItem'])->name('removeitem');


Route::post('cart/increaseQuantity', [CartController::class, 'increaseQuantity'])->name('increaseQuantity');
Route::post('cart/decreaseQuantity', [CartController::class, 'decreaseQuantity'])->name('decreaseQuantity');

//Buscador avanzado

Route::get('buscador/libros', [SearchController::class, 'libros'])->name('buscador.libros');


/////////////////////////////// Rutas de login  /////////////////////////////////////////////////77

Auth::routes();
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

///////////////////////////////   rutas del perfil  /////////////////////////////////////////

//ruta para ir al perfil
Route::get('/perfil/misdatos', function () {
    return view('biblioteca.perfil.misDatos');
})->name('perfil.misdatos');

//ruta para ir a la lista de compras
Route::get('/misCompras', [BuyController::class, 'misCompras'])->name('misCompras');



