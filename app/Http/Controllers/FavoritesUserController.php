<?php

namespace App\Http\Controllers;

use App\Models\FavoritesUser;
use App\Http\Controllers\Controller;
use App\Models\Book;
use Illuminate\Http\Request;
use Cart;

class FavoritesUserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Aquí recuperarías los libros favoritos del usuario actual
        $userFavorites = auth()->user()->favoritesBooks;

        // Puedes pasar estos datos a la vista y renderizarlos
        return view('biblioteca.carrito.index', ['userFavorites' => $userFavorites]);
    }

    /**
     * AÑADIR
     */
    
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(FavoritesUser $favoritesUser)
    {
        // Aquí recuperarías la información de un libro favorito específico
        $userFavorite = FavoritesUser::findOrFail($favoritesUser);

        // Verifica si el libro favorito pertenece al usuario actual
        if ($userFavorite->user_id !== auth()->id()) {
            abort(403, 'No tienes permiso para ver este libro favorito.');
        }

        // Puedes pasar estos datos a la vista y renderizarlos
        return view('biblioteca.carrito.show', ['userFavorite' => $userFavorite]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(FavoritesUser $favoritesUser)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, FavoritesUser $favoritesUser)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(FavoritesUser $favoritesUser)
    {
        //
    }
}
