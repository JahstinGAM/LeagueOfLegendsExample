<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Skin;

class SkinsApiController extends Controller
{
    public function index(){
        return Skin::all();
    }
    public function create(Request $r)
    {
        $validated = $r->validate([
            "nombre" =>"required| unique:categorias,nombre|max:50",
            "img"=>"required"
        ]);
        $s = new Skin();
        $s->nombre = $r ->nombre;
        $s->img = $r -> file("img")->store("img");
        $s->precio = $r -> precio;
        $s->descripcion = $r -> descripcion;
        $s->categoria_id = $r -> categoria_id;
        $s->save();
        return $s;
    }
}
