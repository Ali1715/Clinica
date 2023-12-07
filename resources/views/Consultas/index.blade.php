@extends('adminlte::page')
@extends('adminlte::page')
@section('title', 'Dashboard')
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Consulta</title>
@section('content_header')
<h1>Formulario de Consulta</h1>
@stop
@section('content')
<div class="container">
    <h1>Consultas</h1>

    @if(session('success'))
        <div class="alert alert-success" role="alert">
            {{ session('success') }}
        </div>
    @endif

    <table class="table">
        <thead>
            <tr>
                <th>Doctor</th>
                <th>Paciente</th>
                <th>Diagnóstico</th>
                <th>Fecha</th>
                <th>Hora</th>
                <th>Instrucciones</th>
                <th>Motivo</th>
                <th>Observación</th>
                <!-- Agrega más encabezados de columna si es necesario -->
            </tr>
        </thead>
        <tbody>
            @foreach($consultas as $consulta)
                <tr>
                    <td>{{ $consulta->doctor->user->name }}</td>
                    <td>{{ $consulta->paciente->user->name }}</td>
                    <td>{{ $consulta->diagnostico }}</td>
                    <td>{{ $consulta->fecha }}</td>
                    <td>{{ $consulta->hora }}</td>
                    <td>{{ $consulta->instrucciones }}</td>
                    <td>{{ $consulta->motivo }}</td>
                    <td>{{ $consulta->observacion }}</td>
                    <!-- Agrega más columnas si es necesario -->
                </tr>
            @endforeach
        </tbody>
        <a href="{{ route('consultas.create') }}" class="btn btn-primary">Crear Consulta</a>
    </table>
</div>
@endsection