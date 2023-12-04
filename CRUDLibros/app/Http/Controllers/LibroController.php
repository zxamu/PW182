<?php

namespace App\Http\Controllers;

use App\Models\libro;
use Illuminate\Http\Request;

class LibroController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $allbooks = libro::all();

        return view('libros.index', compact('allbooks'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $addlibro = new libro();
        $addlibro->titulo = $request->txttit;
        $addlibro->autor = $request->txtaut;
        $addlibro->paginas = $request->txtpag;
        $addlibro->anio = $request->txtan;
        $addlibro->save();

        return redirect()->back();
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $updlibro = libro::find($id);
        $updlibro->titulo = $request->txttit;
        $updlibro->autor = $request->txtaut;
        $updlibro->paginas = $request->txtpag;
        $updlibro->anio = $request->txtan;
        $updlibro->update();

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $deslibro = Libro::find($id);
        $deslibro->delete();
        return redirect()->back();
    }
}
