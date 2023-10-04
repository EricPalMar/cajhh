@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Agregar un Nuevo Activo al Inventario klk</h1>
        <form method="POST" action="{{ route('inventario.store') }}">
            @csrf 

            <div class="form-group">
                <label for="serial">Serial:</label>
                <input type="text" name="serial" id="serial" class="form-control">
            </div>

            <div class="form-group">
                <label for="modelo">Modelo:</label>
                <input type="text" name="modelo" id="modelo" class="form-control">
            </div>

            <div class="form-group">
                <label for="marca">Marca:</label>
                <input type="text" name="marca" id="marca" class="form-control">
            </div>

            <div class="form-group">
                <label for="valor">Valor:</label>
                <input type="number" name="valor" id="valor" class="form-control">
            </div>

            <div class="form-group">
                <label for="fechaAdquisicion">Fecha de Adquisición:</label>
                <input type="date" name="fechaAdquisicion" id="fechaAdquisicion" class="form-control">
            </div>

            <div class="form-group">
                <label for="fechaSalida">Fecha de Salida:</label>
                <input type="date" name="fechaSalida" id="fechaSalida" class="form-control">
            </div>

            <button type="submit" class="btn btn-primary">Agregar</button>
        </form>
    </div>
@endsection
