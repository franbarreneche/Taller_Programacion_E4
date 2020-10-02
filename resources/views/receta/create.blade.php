@extends('layout.mainlayout')
@section('content')
<section>
    <div class="container">
        <div class="col text-center">
            <form method="POST" action="{{route('recetas.store')}}">
                @csrf
                <form>
                    <div class="form-group">
                        <label for="nombre">Nombre: </label>
                        <input type="text" class="form-control" id="nombre" name="nombre" aria-describedby="nombreHelp" placeholder="Ingresar nombre">
                        <small id="nombreHelp" class="form-text text-muted">Ingrese el nombre de la receta, no debe ser vacio.</small>
                    </div>
                    <div class="form-group">
                        <label for="procedimiento">Procedimiento: </label>
                        <textarea class="form-control" id="procedimiento" name="procedimiento" aria-describedby="procedimientoHelp" placeholder="Ingresar pasos a seguir"></textarea>
                        <small id="procedimientoHelp" class="form-text text-muted">Ingrese los pasos para llevar adelante la receta.</small>
                    </div>
                    <div class="form-group">
                        <label for="costo">Costo Promedio: </label>
                        <input type="number" class="form-control" id="costo" name="costo_promedio" aria-describedby="costoHelp">
                        <small id="costoHelp" class="form-text text-muted">Ingrese costo promedio</small>
                    </div>
                    <div class="form-group">
                        <label for="creador">Creador de la Receta: </label>
                        <input type="text" class="form-control" id="creador" name="creador" aria-describedby="creadorHelp">
                        <small id="creadorHelp" class="form-text text-muted">Ingrese nombre del creador de la receta</small>
                    </div>
                    <input type="submit" name="agregar" value="Agregar" class="btn btn-primary">
                </form>

        </div>
    </div>
</section>
@endsection