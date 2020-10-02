<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Receta;

class RecetaController extends Controller
{
    // Ruta /recetas
    function index() {
        $recetas = Receta::all();
        return view('receta.index',["recetas"=>$recetas]);
    }

    // Ruta /recetas/{id}
    function show($id) {
        $receta = Receta::findOrFail($id);
        return view('receta.show',["receta"=>$receta]);
    }

    // Ruta /recetas/create
    function create() {
        return view('receta.create');
    }
    // Ruta /recetas/store
    function store() {
        $receta = new Receta();
        $receta->nombre = request("nombre");
        $receta->procedimiento = request("procedimiento");
        $receta->costo_promedio = request("costo_promedio");
        $receta->creador = request("creador"); 
        $receta->fecha_creacion = date("d/m/Y");

        $receta->save();

        return redirect()->route("recetas")->with(["mensaje"=>"Receta agregada con éxito"]);
    }

    // Ruta /recetas/{id}
    function destroy($id) {
        $receta = Receta::findOrFail($id);
        $receta->delete();
        return redirect()->route("recetas")->with(["mensaje"=>"Receta eliminada con éxito"]);
    }


}
