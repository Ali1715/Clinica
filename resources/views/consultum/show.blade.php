@extends('adminlte::page')

@section('template_title')
    {{ $consultum->name ?? "{{ __('Show') Consultum" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Consultum</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('consulta.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Diagnostico:</strong>
                            {{ $consultum->Diagnostico }}
                        </div>
                        <div class="form-group">
                            <strong>Fechahora:</strong>
                            {{ $consultum->Fechahora }}
                        </div>
                        <div class="form-group">
                            <strong>Instrucciones:</strong>
                            {{ $consultum->Instrucciones }}
                        </div>
                        <div class="form-group">
                            <strong>Motivo:</strong>
                            {{ $consultum->Motivo }}
                        </div>
                        <div class="form-group">
                            <strong>Observacion:</strong>
                            {{ $consultum->Observacion }}
                        </div>
                        <div class="form-group">
                            <strong>Consultaid:</strong>
                            {{ $consultum->ConsultaID }}
                        </div>
                        <div class="form-group">
                            <strong>Citaid:</strong>
                            {{ $consultum->CitaID }}
                        </div>
                        <div class="form-group">
                            <strong>Pacienteid:</strong>
                            {{ $consultum->PacienteID }}
                        </div>
                        <div class="form-group">
                            <strong>Doctorid:</strong>
                            {{ $consultum->DoctorID }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
