@extends('adminlte::page')

@section('title', 'Dashboard')
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Paciente</title>
@section('content_header')
<h1>Formulario de Paciente</h1>
@stop
@section('content')
<div class="container">
    <h2>Lista de Paciente</h2>
    <table class="table">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>correo</th>
                <th>Estado Civil</th>
                <th>Lugar de Nacimiento</th>
                <th>Nacionalidad</th>
                <th>Profesión</th>
                <th>Raza</th>
                <th>Residencia Actual</th>
                <th>Grupo Sanguíneo (ABO)</th>
                <!-- Agrega más encabezados de columna si es necesario -->
            </tr>
        </thead>
        <tbody>
            @foreach($pacientes as $paciente)

            <tr>
                <td>{{ $paciente->user->name }}</td>
                <td>{{ $paciente->user->email }}</td>
                <td>{{ $paciente->estado_civil }}</td>
                <td>{{ $paciente->lugar_nacimiento }}</td>
                <td>{{ $paciente->nacionalidad }}</td>
                <td>{{ $paciente->profesion }}</td>
                <td>{{ $paciente->raza }}</td>
                <td>{{ $paciente->residencia_actual }}</td>
                <td>{{ $paciente->grupo_sanguineo_abo }}</td>
                <!-- Agrega más columnas si es necesario -->
            </tr>
            @endforeach
        </tbody>
        <a href="{{ route('pacientes.create') }}" class="btn btn-primary">Crear cuenta paciente</a>
    </table>
</div>
@endsection