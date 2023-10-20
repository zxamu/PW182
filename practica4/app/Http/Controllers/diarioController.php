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

    public function metodoGuardar(Request $req){
        echo "<p>";
            echo $req->path();
            echo " - ";
            echo $req->method();
            echo " - ";
            echo $req->ip();
            echo " - ";
            echo $req -> url();
        echo "</p>";
        /* $req->validate([
            'titulo' => 'required',
            'descripcion' => 'required',
            'fecha' => 'required',
            'imagen' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $nombreImagen = time().'.'.$req->imagen->extension();

        $req->imagen->move(public_path('images'), $nombreImagen);

        return back()
            ->with('success','Se ha subido la imagen correctamente.')
            ->with('image',$nombreImagen); */
    }
}
