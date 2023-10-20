@extends('layouts.plantilla')

@section('titulo', 'Formularios')

@section('contenido')

<h1 class="display-1 text-center text-danger">Formulario</h1>

<div class="container">
    <div class="card">
        <div class="card-header">
            <h5 class="text-center mt-2">Formulario de recuerdos</h5>
        </div>
        <div class="card-body">
            <div class="container">
                <form method="POST" action="/guardarRecuerdo">
                    @csrf

                    <div class="mb-3">
                        <label class="form-label">Titulo:</label>
                        <input type="text" name="txtTitulo" class="form-control">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Recuerdo:</label>
                        <input type="text" name="txtRecuerdo" class="form-control">
                    </div>
            </div>
        </div>
        <div class="card-footer text-body-secondary">
            <div class="d-grid gap-2">
                <button type="submit" class="btn btn-primary">Guardar Recuerdo</button>
              </div>
        </form>
        </div>
    </div>
</div>


@endsection
