<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaginaController extends Controller
{
    public function index()
    {
        return view('paginas.index');
    }
    public function campeones()
    {
        return view('paginas.campeones');
    }
    public function notas()
    {
        return view('paginas.notas');
    }
    public function historias()
    {
        return view('paginas.historias');
    }
}
