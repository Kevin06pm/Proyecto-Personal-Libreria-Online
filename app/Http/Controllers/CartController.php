<?php

namespace App\Http\Controllers;


use App\Models\Book;
use App\Http\Controllers\Controller;
use App\Models\Buy;
use Illuminate\Http\Request;
use Cart;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{

    //UCONFIRMAR SI USUARIO ESTA REGITRADO O NO PARA LA COMPRA 1º

    public function checkout()
    {
        //verficams si el usuario está autenticado
        $userId = Auth::id(); 

        // Obtener los artículos del carrito y el total
        $cartItems = Cart::content();
        $total = Cart::total();

        // // Si no esta autenticado: 
        // if (!$userId) {
        //     return redirect()->route('login')->with('success', 'Necesitas estar registrado para realizar una compra.');
        // }

        // Crear registros de compra
        $buyRecords = [];
        foreach ($cartItems as $item) {
            $buy = Buy::create([
                'idLibro' => $item->id,
                'idUsuario' => $userId,
                'fechaCompra' => now(),
            ]);
            $buyRecords[] = $buy;
        }

        // Pasar los datos a la vista
        return view('biblioteca.carrito.checkout', [
            'cartItems' => $cartItems,
            'total' => $total,
            'userId' => $userId,
            'buyRecords' => $buyRecords,
        ]);
    
    }
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

    // //GUARDAR LIBROS AÑADIDOS AL CARRITO
    // public function checkout(){
    //     return view('biblioteca.carrito.checkout');
    // }

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
        return redirect()->back()->with('success', 'Carrito Vaciado');
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

