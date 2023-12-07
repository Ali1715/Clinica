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
        <h2>Registrar Paciente</h2>
        <form method="post" action="{{ route('pacientes.store') }}">
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
                 <label for="estado_civil">Estado Civil:</label>
                 <select class="form-control" id="estado_civil" name="estado_civil">
                <option value="soltero">Soltero</option>
                <option value="casado">Casado</option>
                 <option value="viudo">Viudo</option>
                 <option value="divorciado">Divorciado</option>
                    </select>
            </div>
            <div class="form-group">
                <label for="lugar_nacimiento">Lugar de Nacimiento:</label>
                <input type="text" class="form-control" id="lugar_nacimiento" name="lugar_nacimiento">
            </div>
            <div class="form-group">
                <label for="nacionalidad">Nacionalidad:</label>
                <input type="text" class="form-control" id="nacionalidad" name="nacionalidad">
            </div>
            <div class="form-group">
                <label for="profesion">Profesión:</label>
                <input type="text" class="form-control" id="profesion" name="profesion">
            </div>
            <div class="form-group">
                <label for="raza">Raza:</label>
                <input type="text" class="form-control" id="raza" name="raza">
            </div>
            <div class="form-group">
                <label for="residencia_actual">Residencia Actual:</label>
                <input type="text" class="form-control" id="residencia_actual" name="residencia_actual">
            </div>
             <div class="form-group">
                 <label for="grupo_sanguineo_abo">Grupo Sanguíneo (ABO):</label>
                 <select class="form-control" id="grupo_sanguineo_abo" name="grupo_sanguineo_abo">
                    <option value="O+">O+</option>
                    <option value="O-">O-</option>   
                    <option value="A+">A+</option>
                    <option value="A-">A-</option>
                    <option value="B+">B+</option>
                    <option value="B-">B-</option>
                    <option value="AB+">AB+</option>
                    <option value="AB-">AB-</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Registrar Paciente</button>
        </form>
    </div>
@endsection