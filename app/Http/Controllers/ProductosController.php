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
            'producto' => $user = Productospost::findorfail($id),
            'vehiculo' => $vehiculo = Vehiculo::findorfail($id)
        ]);
    }
    // ------------------------- Almacenamiento de Datos Temporal (Variable Encapsulada):
    private $array_productos = [
        // Key, en el ForEach sera = 0, 1, 2 .. Posicion de Arrays Dentro del Array
        [
            'postID' => 0,
            'userID' => 'denis17',
            'titulo' => 'Viaje a Madrid',
            'descripcion' => 'Ser Puntuales!',
            'fecha_viaje' => '17/12/2022',
            'hora_viaje' => '12:00',
            'inicio_ruta' => 'Carlos III, Cartagena',
            'destino_ruta' => 'Madrid, Warner Bross',
            'plazas' => '3',
            'precio' => 'AUTOCALCULADO_funcion_plazas_vehiculo_distancia',
            'status_active' => 'true',
            'allow_desvios' => 'false',
            'estimacion_hora_llegada' => 'AUTOCALCULADO',
            'distancia' => 'AUTOCALCULADO',
            'email' => 'devengvengg@gmail.com',
            'tfn' => '662 468 091'
        ]
    ];
}
