<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Book;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function libros(Request $request)
    {
        $term = $request->get('term');

        $querys = Book::where('titulo', 'LIKE', '%' . $term . '%')->get();

        $data = [];

        foreach($querys as $query){
            $data[] = [
                'label' => $query->titulo,
                'value' => $query->titulo,
                'imagen' => asset($query->imagenPortada),
                'url' => route('biblioteca.show', ['id' => $query->idLibro])
            ];
        }

        return $data;
    }
}
