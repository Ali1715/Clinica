@extends('adminlte::page')

@section('template_title')
    {{ $resultado->name ?? "{{ __('Show') Resultado" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Resultado</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('resultados.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Fecha Hora:</strong>
                            {{ $resultado->Fecha_hora }}
                        </div>
                        <div class="form-group">
                            <strong>Resultado:</strong>
                            {{ $resultado->Resultado }}
                        </div>
                        <div class="form-group">
                            <strong>Serv Analisisid:</strong>
                            {{ $resultado->Serv_analisisID }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
