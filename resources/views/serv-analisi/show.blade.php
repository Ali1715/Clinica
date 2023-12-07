@extends('adminlte::page')

@section('template_title')
    {{ $servAnalisi->name ?? "{{ __('Show') Serv Analisi" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Serv Analisi</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('serv-analisis.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Servicioid:</strong>
                            {{ $servAnalisi->ServicioID }}
                        </div>
                        <div class="form-group">
                            <strong>Analisisid:</strong>
                            {{ $servAnalisi->AnalisisID }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
