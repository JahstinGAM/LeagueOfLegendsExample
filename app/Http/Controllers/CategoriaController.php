<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categoria;

class CategoriaController extends Controller
{
    public function index()
    {
        $listaCat = Categoria::all();
        return view('categorias.index', array('listaCat'=>$listaCat));
    }
    public function crear()
    {
        return view('categorias.crear');
    }
    public function postcrear(Request $r)
    {
        $validated = $r->validate([
            "nombre" =>"required| unique:categorias,nombre|max:50",
            "img"=>"required"
        ]);
        //var_dump($r->all());
        $cat = new Categoria();
        $cat->nombre = $r ->nombre;
        $cat->img = $r -> file("img")->store("img");
        // var_dump($cat);
        $cat->save();
        return redirect('/categorias');
    }
    public function mod($id)
    {
        $cat = Categoria::find($id);//contienes todos lo datos de la categoria del id
        return view('categorias.mod', array('cat'=>$cat));
    }
    public function postmod(Request $r, $id)
    {
        $cat = Categoria::find($id);
        $cat->nombre = $r ->nombre;
        if ($r->hasFile('img')) {
            $cat->img = $r -> file("img")->store("img");
        }
        // var_dump($cat);
        $cat->save();
        return redirect('/categorias');
    }
    public function delete($id)
    {
        $cat = Categoria::find($id);//contienes todos lo datos de la categoria del id

        $cat->delete();
        return redirect('/categorias');
    }
}
