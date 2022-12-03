<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Skin;

class CatalogoController extends Controller
{
    public function index()
    {
        $listaskin = Skin::all();
        return view('catalogo.index', array('listaskin'=>$listaskin));
    }
}
