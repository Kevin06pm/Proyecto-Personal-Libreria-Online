<?php

namespace App\Http\Controllers;

use App\Models\Buy;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BuyController extends Controller
{

    public function misCompras()
    {
        // Obtener todas las compras del usuario actual
        $userId = auth()->id();
        $compras = Buy::where('idUsuario', $userId)->with('book')->get();

        // Devolver la vista con las compras
        return view('biblioteca.perfil.misCompras', compact('compras'));
    }
}
