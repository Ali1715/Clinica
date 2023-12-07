@extends('adminlte::page')
@section('title', 'Dashboard')
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Administrativo</title>
@section('content_header')
<h1>Formulario de Administrativo</h1>
@stop
@section('content')
    <div class="container">
    <h2>Registrar Nuevo Administrativo</h2>
    <form method="post" action="{{ route('administrativos.store') }}">
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
        <label for="cargo">Cargo:</label>
        <input type="text" class="form-control" id="cargo" name="cargo" required>
        </div>
        <button type="submit" class="btn btn-primary">Registrar Administrativo</button>
    </form>
</div>
@stop
       
