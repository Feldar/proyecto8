@extends('layouts.master')
{{-- Display Show --}}
@section('content')
    <article class="row">
        <header>
            <h1>Show Page {{ $producto['titulo'] }}</h1>
        </header>
        <ul style="margin-left: 15px;">
            @if($producto['status_active'] == 'true')
            <li>Post Activo</li>
            @else
            <li>Post Inactivo</li>
            @endif
            <li>Post ID: {{ $producto['postID'] }}</li>
            <li>User ID: {{ $producto['userID'] }}</li>
            <li>Titulo: {{ $producto['titulo'] }}</li>
            <li>Descripcion: {{ $producto['descripcion'] }}</li>
            <li>Fecha del Viaje: {{ $producto['fecha_viaje'] }}</li>
            <li>Hora del Viaje: {{ $producto['hora_viaje'] }}</li>
            <li>Inicio de la Ruta: {{ $producto['inicio_ruta'] }}</li>
            <li>Destino de la Ruta: {{ $producto['destino_ruta'] }}</li>
            <li>Admiten Desvios: {{ $producto['allow_desvios'] }}</li>
            <li>Plazas Disponibles: {{ $producto['plazas'] }}</li>
            <li>Precio por Persona: {{ $producto['precio'] }}</li>
            <li>Hora de llegada Estimada: {{ $producto['estimacion_hora_llegada'] }}</li>
            <li>Distancia a Recorrer: {{ $producto['distancia'] }}</li>
            <li>Email Conductor: {{ $producto['email'] }}</li>
            <li>Telefono del Conductor: {{ $producto['tfn'] }}</li>
        </ul>
        <a class="btn btn-warning" href="{{ url('/productos/edit/' . $id ) }}">Editar Post</a>
        <a class="btn btn-outline-info" href="{{ action('App\Http\Controllers\ProductosController@getIndex') }}">Volver al listado</a>
    </article>
@endsection
