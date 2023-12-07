@extends('adminlte::page')
@extends('adminlte::page')
@section('title', 'Dashboard')
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de cita</title>
@section('content_header')
<h1>Formulario de cita</h1>
@stop
@section('title', 'Dashboard')
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Cita</title>
@section('content_header')
<h1>Formulario de Cita</h1>
@stop
@section('content')
    <div class="container">
        <h1>Crear Cita</h1>

        @if($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('citas.store') }}" method="POST">
            @csrf
      
<div class="form-group">
<label for="paciente_id">Paciente:</label>
<select class="form-control" id="paciente_id" name="paciente_id" required>
<option value="" disabled selected>Selecciona un paciente</option>
        @foreach($pacientes as $paciente)
            <option value="{{ $paciente->usuario_id }}">{{ $paciente->user->name ?? 'Nombre no disponible' }}</option>
        @endforeach
    </select>
</div>

<div class="form-group">
    <label for="doctor_id">Doctor:</label>
    <select class="form-control" id="doctor_id" name="doctor_id" required>
        <option value="" disabled selected>Selecciona un doctor</option>
        @foreach($doctors as $doctor)
            <option value="{{ $doctor->usuario_id }}">{{ $doctor->user->name ?? 'Nombre no disponible' }}</option>
        @endforeach
    </select>
</div> 

            <div class="form-group">
                <label for="motivo">Motivo:</label>
                <input type="text" class="form-control" id="motivo" name="motivo" required>
            </div>

            <div class="form-group">
                <label for="fecha">Fecha:</label>
                <input type="date" class="form-control" id="fecha" name="fecha" required>
            </div>

            <div class="form-group">
                <label for="hora">Hora:</label>
                <input type="time" class="form-control" id="hora" name="hora" required>
            </div>

            <button type="submit" class="btn btn-primary">Crear Cita</button>
        </form>
    </div>
@endsection