@extends('adminlte::page')

@section('title', 'Dashboard')
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Doctores</title>
@section('content_header')
<h1>Formulario de Doctores</h1>
@stop

@section('content')
<div class="container">
    <h2>Registrar Doctor</h2>
    <form method="post" action="{{ route('doctores.store') }}">
        @csrf
        <div class="form-group">
            <label for="name">Nombre:</label>
            <input type="text" class="form-control" id="name" name="name" required>
        </div>
        <div class="form-group">
            <label for="email">Correo Electrónico:</label>
            <input type="email" class="form-control" id="email" name="email" required>
        </div>
        <div class="form-group">
            <label for="password">Contraseña:</label>
            <input type="password" class="form-control" id="password" name="password" required>
        </div>
        <div class="form-group">
            <label for="especialidad">Especialidad:</label>
            <input type="text" class="form-control" id="especialidad" name="especialidad" required>
        </div>
        <!-- Agrega más campos si es necesario -->

        <button type="submit" class="btn btn-primary">Registrar Doctor</button>
    </form>
</div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop