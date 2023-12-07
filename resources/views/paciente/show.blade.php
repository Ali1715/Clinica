@extends('adminlte::page')

@section('template_title')
    {{ $paciente->name ?? "{{ __('Show') Paciente" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Paciente</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('pacientes.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Ci:</strong>
                            {{ $paciente->Ci }}
                        </div>
                        <div class="form-group">
                            <strong>Direccion:</strong>
                            {{ $paciente->Direccion }}
                        </div>
                        <div class="form-group">
                            <strong>Email:</strong>
                            {{ $paciente->Email }}
                        </div>
                        <div class="form-group">
                            <strong>Estado Civil:</strong>
                            {{ $paciente->Estado_civil }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha Nacimiento:</strong>
                            {{ $paciente->Fecha_nacimiento }}
                        </div>
                        <div class="form-group">
                            <strong>Lugar Nacimiento:</strong>
                            {{ $paciente->Lugar_nacimiento }}
                        </div>
                        <div class="form-group">
                            <strong>Nacionalidad:</strong>
                            {{ $paciente->Nacionalidad }}
                        </div>
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $paciente->Nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Profesion:</strong>
                            {{ $paciente->Profesion }}
                        </div>
                        <div class="form-group">
                            <strong>Telefono:</strong>
                            {{ $paciente->Telefono }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
