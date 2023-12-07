@extends('adminlte::page')

@section('template_title')
    {{ $citum->name ?? "{{ __('Show') Citum" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Citum</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('cita.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Fechahora:</strong>
                            {{ $citum->Fechahora }}
                        </div>
                        <div class="form-group">
                            <strong>Citaid:</strong>
                            {{ $citum->CitaID }}
                        </div>
                        <div class="form-group">
                            <strong>Pacienteid:</strong>
                            {{ $citum->PacienteID }}
                        </div>
                        <div class="form-group">
                            <strong>Personalid:</strong>
                            {{ $citum->PersonalID }}
                        </div>
                        <div class="form-group">
                            <strong>Turnoid:</strong>
                            {{ $citum->TurnoID }}
                        </div>
                        <div class="form-group">
                            <strong>Especialidadid:</strong>
                            {{ $citum->EspecialidadID }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
