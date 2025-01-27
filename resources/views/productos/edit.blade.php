@extends('layouts.master')
{{-- Display Edit --}}
@section('content')
    <article class="row">
        <header>
            <h1>Edit Blablacar Page {{ $id }}</h1>
        </header>
        <div class="card">
            <div class="card-body" style="padding:30px">
                <form action="{{ url('/productos/edit') . $id }}" method="GET">
                    @csrf
                    <div class="form-group">
                        <label for="titulo">Título</label>
                        <input type="text" name="titulo" id="titulo" class="form-control" value="{{ $producto['titulo'] }}">
                    </div>
                    <div class="form-group">
                        <label for="fecha-viaje">Fecha Viaje</label>
                        <input type="date" name="fecha-viaje" id="fecha-viaje" class="form-control" value="{{ $producto['fecha_viaje'] }}">
                    </div>
                    <div class="form-group">
                        <label for="hora-viaje">Hora Viaje</label>
                        <input type="time" name="hora-viaje" id="hora-viaje" class="form-control" value="{{ $producto['hora_viaje'] }}">
                    </div>
                    <div class="form-group">
                        <label for="descripcion">Descripcion</label>
                        <textarea name="descripcion" id="descripcion" class="form-control" rows="3" style="width: 50%;">{{ $producto['descripcion'] }}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="inicio-ruta">Inicio de Ruta</label>
                        <input type="text" name="inicio-ruta" id="inicio-ruta" class="form-control" value="{{ $producto['inicio_ruta'] }}">
                    </div>
                    <div class="form-group">
                        <label for="destino-ruta">Destino de Ruta</label>
                        <input type="text" name="destino-ruta" id="destino-ruta" class="form-control" value="{{ $producto['destino_ruta'] }}">
                    </div>
                    <div class="form-group">
                        <label for="plazas">Plazas Disponibles</label>
                        <input type="number" name="plazas" id="plazas" class="form-control" style="width: 25%;" value="{{ $producto['plazas'] }}">
                    </div>
                    <div class="form-group">
                        <label for="allow-desvios">Se Admiten Desvios (si/no)</label>
                        <input type="radio" name="allow-desvios" id="allow-desvios" checked value='true'>
                        <input type="radio" name="allow-desvios" id="allow-desvios" value='false'>
                    </div>
                    <div class="form-group text-center">
                        <button type="submit" class="btn btn-primary" style="padding:8px 100px;margin-top:25px;">Añadir Post</button>
                    </div>
                </form>
            </div>
        </div>
        <a class="btn btn-outline-info" href="{{ action('App\Http\Controllers\ProductosController@getIndex') }}">Volver al listado</a>
    </article>
@endsection
