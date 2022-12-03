<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Skin;
use Illuminate\Support\Facades\DB;
use App\Models\Venta;
use Carbon\Carbon;//ojo con eso

class SalidaController extends Controller
{
    public function index()
    {
        $listaskin = Skin::all();
        return view('salidas.salidas', array('listaskin'=>$listaskin));
    }
    public function guardar(Request $r)
    {
        DB::transaction(function ()use($r) {
            $v = new Venta();
            $v->fecha=Carbon::now();
            $v->save();
            $ids = $r->id;
            $precios= $r->precio;
            $descripciones= $r->descripcion;
            for ($i=0; $i <count($ids) ; $i++) {
                $p = Skin::find($ids[$i]);
                $p->save();
                $v->skins()->attach($ids[$i],['precio'=>$precios[$i]],['descripcion'=>$descripciones[$i]]);
            }
        });
    }
}
