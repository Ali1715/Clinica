@extends('adminlte::page')

@section('template_title')
    {{ $analisi->name ?? "{{ __('Show') Analisi" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Analisi</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('analisis.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Descripcion:</strong>
                            {{ $analisi->Descripcion }}
                        </div>
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $analisi->Nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Precio:</strong>
                            {{ $analisi->Precio }}
                        </div>
                        <div class="form-group">
                            <strong>Tipoid:</strong>
                            {{ $analisi->TipoID }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
