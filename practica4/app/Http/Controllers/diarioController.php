<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class diarioController extends Controller
{
    public function metodoInicio(){
        return view('welcome');
    }

    public function metodoFormularios(){
        return view('formularios');
    }

    public function metodoRecuerdos(){
        return view('recuerdos');
    }
}
