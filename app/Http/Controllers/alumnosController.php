<?php

namespace App\Http\Controllers;

use App\Alumnos;
use Illuminate\Http\Request;

class alumnosController extends Controller
{
    public function abre_alumnos($curso){ //PARA QUE ME ABRIERA ALUMNOS POR CURSO
        return Alumnos::where("curso",$curso)->inRandomOrder()->first();
    }
    public function carga_datos($curso){ //PARA QUE ME CARGUE LOS DATOS DE LOS ALUMNOS DEPENDIENDO DEL CURSO
        return view('datos')->with('alumnos',Alumnos::where ('curso',$curso)->inRandomOrder()->limit(1)->get())
                               ->with('curso',$curso);
    }
}
