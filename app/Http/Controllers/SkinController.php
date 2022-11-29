<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categoria;
use App\Models\Skin;

class SkinController extends Controller
{
    public function crear()
    {
        $listacat = Categoria::all();
        return view('skins.crear',array('listacat'=>$listacat));
    }
    public function postcrear(Request $r)
    {
        $validated = $r->validate([
            "nombre" =>"required| unique:categorias,nombre|max:50",
            "img"=>"required"
        ]);
        //var_dump($r->all());
        $s = new Skin();
        $s->nombre = $r ->nombre;
        $s->img = $r -> file("img")->store("img");
        $s->precio = $r -> precio;
        $s->categoria_id = $r -> categoria_id;
        // var_dump($cat);
        $s->save();
        return redirect('/skins');
    }
    public function index()
    {
        $listaskin = Skin::all();
        return view('skins.index', array('listaskin'=>$listaskin));
    }
}
