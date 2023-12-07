@extends('adminlte::page')

@section('template_title')
    {{ $consulta->name ?? "{{ __('Show') Consulta" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Consulta</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('consultas.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Diagnostico:</strong>
                            {{ $consulta->Diagnostico }}
                        </div>
                        <div class="form-group">
                            <strong>Fechahora:</strong>
                            {{ $consulta->Fechahora }}
                        </div>
                        <div class="form-group">
                            <strong>Instrucciones:</strong>
                            {{ $consulta->Instrucciones }}
                        </div>
                        <div class="form-group">
                            <strong>Motivo:</strong>
                            {{ $consulta->Motivo }}
                        </div>
                        <div class="form-group">
                            <strong>Observacion:</strong>
                            {{ $consulta->Observacion }}
                        </div>
                        <div class="form-group">
                            <strong>Citaid:</strong>
                            {{ $consulta->CitaID }}
                        </div>
                        <div class="form-group">
                            <strong>Pacienteid:</strong>
                            {{ $consulta->PacienteID }}
                        </div>
                        <div class="form-group">
                            <strong>Doctorid:</strong>
                            {{ $consulta->DoctorID }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
