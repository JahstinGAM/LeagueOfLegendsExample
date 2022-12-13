<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categoria;
use App\Models\Skin;
use Illuminate\Support\Facades\DB;
use Barryvdh\DomPDF\Facade\Pdf;
use App;
use Carbon\Carbon;

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
        $s->descripcion = $r -> descripcion;
        $s->categoria_id = $r -> categoria_id;
        // var_dump($cat);
        $s->save();
        return redirect('/skins');
    }
    public function index()
    {

        $listaskin= DB::table('skins')
            ->join('categorias', 'categorias.id', '=', 'skins.categoria_id')
            ->select('skins.*','categorias.nombre as nombreCat')
            ->get();



        //  $listaskin = Skin::all();
         return view('skins.index', array('listaskin'=>$listaskin));
    }
    public function modi($id)
    {
        $skin = Skin::find($id);//contienes todos lo datos de la categoria del id
        return view('skins.modi', array('skin'=>$skin));
    }
    public function postmodi(Request $r, $id)
    {
        $skin = Skin::find($id);
        $skin->nombre = $r ->nombre;
        $skin->precio = $r ->precio;
        $skin->descripcion = $r ->descripcion;
        if ($r->hasFile('img')) {
            $skin->img = $r -> file("img")->store("img");
        }
        // var_dump($cat);
        $skin->save();
        return redirect('/skins');
    }
    public function deletes($id)
    {
        $skin = Skin::find($id);//contienes todos lo datos de la categoria del id

        $skin->delete();
        return redirect('/skins');
    }

    public function download(){

        $listaskin= DB::table('skins')
        ->join('categorias', 'categorias.id', '=', 'skins.categoria_id')
        ->select('skins.*','categorias.nombre as nombreCat')
        ->get();

    //    $listaskin = Skin::all();



        $today = Carbon::now()->format('d/m/Y');
        $mytime= Carbon::now()->setTimezone('America/La_Paz')->format('H:i:s');
        $pdf = Pdf::loadView('skins.imp', array('listaskin'=>$listaskin), compact('today','mytime'));
        return $pdf->download('Reporte_Skins.pdf');
        // $pdf = App::make('dompdf.wrapper');
        // $pdf->loadHTML('
        // ');
        // return $pdf->stream();
    }
}
