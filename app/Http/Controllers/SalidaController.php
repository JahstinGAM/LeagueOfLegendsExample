<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Skin;

class SalidaController extends Controller
{
    public function index()
    {
        $listaskin = Skin::all();
        return view('salidas.salidas', array('listaskin'=>$listaskin));
    }
}
