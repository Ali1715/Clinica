@extends('adminlte::page')
@section('content')
<div class="container">
    <h2>Lista de Doctores</h2>
    <table class="table">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Correo</th>
                <th>Especialidad</th>
                <!-- Agrega más encabezados de columna si es necesario -->
            </tr>
        </thead>
        <tbody>
            @foreach($doctores as $doctor)
            <tr>
                <td>{{ $doctor->user->name }}</td>
                <td>{{ $doctor->user->email }}</td>
                <td>{{ $doctor->especialidad }}</td>
                <!-- Agrega más columnas si es necesario -->
            </tr>
            @endforeach
        </tbody>
        <a href="{{ route('doctores.create') }}" class="btn btn-primary">Crear cuenta doctores</a>
    </table>
</div>
@endsection