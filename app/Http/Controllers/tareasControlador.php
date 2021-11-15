<?php

namespace App\Http\Controllers;

use App\Models\tarea;
use Illuminate\Http\Request;

class tareasControlador extends Controller
{
    function mostrar(){
        return view("extends");
    }

    function anadir(Request $pet){
        $tarea= new tarea;
        $tarea->nombre = $pet->get("nombre_tarea");
        $tarea->save();
        return redirect("/");
    }

    function eliminar($id){
        $tarea= new tarea;
        $tarea = tarea::find($id);
        $tarea->delete();
        return redirect("/");
    }
}
