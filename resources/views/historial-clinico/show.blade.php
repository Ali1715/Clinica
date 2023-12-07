@extends('adminlte::page')

@section('template_title')
    {{ $historialClinico->name ?? "{{ __('Show') Historial Clinico" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Historial Clinico</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('historial-clinicos.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Enf Actual:</strong>
                            {{ $historialClinico->Enf_actual }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha Hora:</strong>
                            {{ $historialClinico->Fecha_hora }}
                        </div>
                        <div class="form-group">
                            <strong>Hip Diagnostico:</strong>
                            {{ $historialClinico->Hip_diagnostico }}
                        </div>
                        <div class="form-group">
                            <strong>Consultaid:</strong>
                            {{ $historialClinico->ConsultaID }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
