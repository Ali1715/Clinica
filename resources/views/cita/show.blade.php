@extends('adminlte::page')

@section('template_title')
    {{ $cita->name ?? "{{ __('Show') Cita" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Cita</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('citas.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Fechahora:</strong>
                            {{ $cita->Fechahora }}
                        </div>
                        <div class="form-group">
                            <strong>Pacienteid:</strong>
                            {{ $cita->PacienteID }}
                        </div>
                        <div class="form-group">
                            <strong>Personalid:</strong>
                            {{ $cita->PersonalID }}
                        </div>
                        <div class="form-group">
                            <strong>Turnoid:</strong>
                            {{ $cita->TurnoID }}
                        </div>
                        <div class="form-group">
                            <strong>Especialidadid:</strong>
                            {{ $cita->EspecialidadID }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
