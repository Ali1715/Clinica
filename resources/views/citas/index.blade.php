@extends('adminlte::page')
@extends('adminlte::page')
@section('title', 'Dashboard')
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cita</title>
@section('content_header')
<h1>Cita</h1>
@stop
@section('content')
    <div class="container">
        <h1>Lista de Citas</h1>

        @if(session('success'))
            <div class="alert alert-success" role="alert">
                {{ session('success') }}
            </div>
        @endif
        <table class="table">
        <thead>
            <tr>
                <th>Paciente</th>
                <th>Doctor</th>
                <th>Motivo</th>
                <th>Fecha</th>
                <th>Hora</th>
                <!-- Agrega más encabezados de columna si es necesario -->
            </tr>
        </thead>
        
        <tbody>
            @foreach($citas as $cita)
                <tr>
                <td>{{ $cita->paciente->user->name }}</td>
                <td>{{ $cita->doctor->user->name }}</td>
                <td>{{ $cita->motivo }}</td>
                <td>{{ $cita->fecha }}</td>
                <td>{{ $cita->hora }}</td>

                <!-- Agrega más columnas si es necesario -->
            </tr>
            @endforeach
        </tbody>
        <a href="{{ route('citas.create') }}" class="btn btn-primary">Crear Cita</a>
        </table>
    </div>
    
@endsection
