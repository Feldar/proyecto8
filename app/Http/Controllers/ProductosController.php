<?php

namespace App\Http\Controllers;

use App\Models\Productospost;
use App\Models\User;
use App\Models\Vehiculo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductosController extends Controller {
    // Obtener Index:
    public function getIndex() {
        $productos = Productospost::all();
        return view('productos.index', ['productos' => $productos]);
    }
    // Obtener Create:
    public function getCreate() {
        return view('productos.create');
    }
    // Obtener Show ID:
    public function getShow($id) {
        return view('productos.show', [

            'user' => $user = User::findorfail($id),
            'vehiculo' => $vehiculo = Vehiculo::findorfail($id),
            'producto' => $producto = Productospost::findorfail($id)
        ]);
    }
    // Obtener Edit ID:
    public function getEdit($id) {

        return view('productos.edit', [
            'producto' => $user = Productospost::findorfail($id)
        ]);
    }

    public function postCreate(Request $request)
    {
        $producto = new Productospost;
        $producto->titulo = $request->input('titulo');
        $producto->fecha_viaje = $request->input('fecha-viaje');
        $producto->hora_viaje = $request->input('hora-viaje');
        $producto->descripcion = $request->input('descripcion');
        $producto->inicio_ruta = $request->input('inicio-ruta');
        $producto->destino_ruta = $request->input('destino-ruta');
        $producto->plazas_disponibles = $request->input('plazas');
        $producto->precio_persona = $request->input('precio-persona');
        $producto->estimacion_hora_llegada = $request->input('estimacion_hora_llegada');
        $producto->distancia = $request->input('distancia');
        $producto->precio = $request->input('precio');
        $producto->save();
        return redirect()->action([ProductosController::class, 'getIndex']);
    }

    public function putEdit(Request $request, $id)
    {
        $producto = Productospost::findorfail($id);
        $producto->titulo = $request->input('titulo');
        $producto->fecha_viaje = $request->input('fecha-viaje');
        $producto->hora_viaje = $request->input('hora-viaje');
        $producto->descripcion = $request->input('descripcion');
        $producto->inicio_ruta = $request->input('inicio-ruta');
        $producto->destino_ruta = $request->input('destino-ruta');
        $producto->plazas_disponibles = $request->input('plazas');
        $producto->precio_persona = $request->input('precio-persona');
        $producto->estimacion_hora_llegada = $request->input('estimacion_hora_llegada');
        $producto->distancia = $request->input('distancia');
        $producto->precio = $request->input('precio');
        $producto->save();
        return view('productos.edit', [
            'producto' => $user = Productospost::findorfail($id)
        ]);
    }
}
