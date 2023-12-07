@extends('adminlte::page')

@section('template_title')
    {{ $horario->name ?? "{{ __('Show') Horario" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Horario</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('horarios.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Dia:</strong>
                            {{ $horario->Dia }}
                        </div>
                        <div class="form-group">
                            <strong>Hora Fin:</strong>
                            {{ $horario->Hora_fin }}
                        </div>
                        <div class="form-group">
                            <strong>Hora Inicio:</strong>
                            {{ $horario->Hora_inicio }}
                        </div>
                        <div class="form-group">
                            <strong>Intervalos:</strong>
                            {{ $horario->Intervalos }}
                        </div>
                        <div class="form-group">
                            <strong>Turnos Disponibles:</strong>
                            {{ $horario->Turnos_disponibles }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
