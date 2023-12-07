@extends('adminlte::page')

@section('template_title')
    {{ $turnoHorario->name ?? "{{ __('Show') Turno Horario" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Turno Horario</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('turno-horarios.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Estado:</strong>
                            {{ $turnoHorario->Estado }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha Hora:</strong>
                            {{ $turnoHorario->Fecha_hora }}
                        </div>
                        <div class="form-group">
                            <strong>Turnoid:</strong>
                            {{ $turnoHorario->TurnoID }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
