@extends('adminlte::page')
@section('content')
    <h1>Lista de Administrativos</h1>

    @if(session('success'))
        <div class="alert alert-success" role="alert">
            {{ session('success') }}
        </div>
    @endif

    <table class="table">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Correo Electrónico</th>
                <th>Cargo</th>
            </tr>
        </thead>
        <tbody>
            @foreach($administrativos as $administrativo)
                <tr>
                    <td>{{ $administrativo->user->name }}</td>
                    <td>{{ $administrativo->user->email }}</td>
                    <td>{{ $administrativo->cargo }}</td>
                </tr>
            @endforeach
        </tbody>
        <a href="{{ route('administrativos.create') }}" class="btn btn-primary">Crear cuenta Administrativos</a>
    </table>
@endsection