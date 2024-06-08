<?php

namespace App\Http\Controllers;


use App\Models\Book;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Cart;


class CartController extends Controller
{
    public function add(Request $request)
    {
        $libro = Book::find($request->id);

        if (empty($libro)) {
            return redirect('/');
        }

        Cart::add([
            'id' => $libro->idLibro,
            'name' => $libro->titulo,
            'qty' => 1,
            'price' => $libro->precio,
            'options' => [
                'imagenPortada' => $libro->imagenPortada,
                'autor' => $libro->autor
            ]
        ]);

        return redirect()->back()->with('success', 'Libro agregado: ' . $libro->titulo);
    }

    //GUARDAR LIBROS AÑADIDOS AL CARRITO
    public function checkout(){
        return view('biblioteca.carrito.checkout');
    }

    //ELIMINAR UN LIBRO DEL CARRITO
    public function removeItem(Request $request)
    {
        Cart::remove($request->rowId);
        return redirect()->back()->with('success','Libro Eliminado');
    }

    //ELIMAAR TODO EL CARRITO
    public function clear()
    {
        Cart::destroy();
        return redirect()->back()->with('success', 'Carrito vacio');
    }

    //INCREMENTAR CANTIDAD DEL LIBRO
    public function increaseQuantity(Request $request)
    {
        //ubicacion de libro
        $libro = Cart::get($request->rowId);

        //estraer cantidad
        $qty = $libro->qty+1;

        //actualizar libro de carrito
        Cart::update($request->rowId, $qty);

        return redirect()->back();
    }
    //DISMINUIR CANTIDAD DEL LIBRO
    public function decreaseQuantity(Request $request)
    {
        //ubicacion de libro
        $libro = Cart::get($request->rowId);

        //estraer cantidad
        $qty = $libro->qty-1;

        //actualizar libro de carrito
        Cart::update($request->rowId, $qty);

        return redirect()->back();

    }


}