<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class controladorTareas extends Controller
{
    function mostrar(){
        return view("extends");
    }

    function anadir(){
        return "anadir";
    }

    function eliminar($id){
        return "eliminar";
    }
}
