@extends('layout.mainlayout')
@section('content')
<section>
  <div class="container">
      <div class="col text-center">
        <div class="col-lg-8 mx-auto">
          <div>Costo Promedio: <span class="badge bg-info">${{$receta->costo_promedio}}</span></div>
          <h2>Receta de {{$receta->nombre}}</h2>
          <div>
          <p class="lead">Se hace con lo siguiente:</p>
          <p>{{$receta->procedimiento}}</p> 
          <p class="text-muted">Autor: {{$receta->creador}}</p>
          <p class="text-muted"><em>{{date('d/m/Y',strtotime($receta->fecha_creacion))}}</em></p>
          </div>
        </div>
        <a href="{{route('recetas')}}">Volver</a>
        <form action="/recetas/{{$receta->id}}" method="POST">
          @csrf
          @method("DELETE")
          <button type="summit" value="Eliminar" class="btn btn-danger">Eliminar</button>
        </form>
      </div>
    </div>
</section>
@endsection