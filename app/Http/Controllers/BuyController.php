<?php

namespace App\Http\Controllers;

use App\Models\Buy;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BuyController extends Controller
{
    public function confirmarCompra(Request $request)
    {
        $buy = Buy::create([
            'fechaCompra' => now(),
            'idLibro' => $request->idLibro,
            'idUsuario' => Auth::id()
        ]);

        // Redirigir a una página de confirmación o donde desees
        return redirect()->route('biblioteca')->with('success', 'Compra confirmada con éxito');
    }
}
