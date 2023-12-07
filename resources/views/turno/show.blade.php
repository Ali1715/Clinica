@extends('adminlte::page')

@section('template_title')
    {{ $turno->name ?? "{{ __('Show') Turno" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Turno</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('turnos.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Hora Fin:</strong>
                            {{ $turno->Hora_fin }}
                        </div>
                        <div class="form-group">
                            <strong>Hora Inicio:</strong>
                            {{ $turno->Hora_inicio }}
                        </div>
                        <div class="form-group">
                            <strong>Doctorid:</strong>
                            {{ $turno->DoctorID }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
