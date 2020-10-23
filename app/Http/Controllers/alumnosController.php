<?php

namespace App\Http\Controllers;

use App\Alumnos;
use Illuminate\Http\Request;

class alumnosController extends Controller
{
    public function abre_alumnos($curso){
        return Alumnos::where("curso",$curso)->inRandomOrder()->first();
    }
    public function carga_datos($tema){
        return view('datos')->with('datos',Alumnos::where ('curso',$curso)->inRandomOrder()->limit(1)->get())
                               ->with('curso',$curso);
    }
}
