<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DragonProgramador extends Controller
{
    function inicio(){
        return view('login');
    }

    function calculaArea(Request $request){
        //debemos hacer referencia al atributo name en el input del formulario
        $usuario = $request->input('inusuario');
        $contra = $request->input('incontra');

        if ($usuario==0) {
            return view('error');
        }
        else if ($contra==0) {
            return view('error');
        }
        else {
            return view('sesionco');
        }
    }
}