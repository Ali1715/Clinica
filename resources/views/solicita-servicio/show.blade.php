@extends('adminlte::page')

@section('template_title')
    {{ $solicitaServicio->name ?? "{{ __('Show') Solicita Servicio" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Solicita Servicio</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('solicita-servicios.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Servicioid:</strong>
                            {{ $solicitaServicio->ServicioID }}
                        </div>
                        <div class="form-group">
                            <strong>Citaid:</strong>
                            {{ $solicitaServicio->CitaID }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
