@extends('adminlte::page')

@section('template_title')
    {{ $donante->name ?? "{{ __('Show') Donante" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Donante</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('donantes.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Causa Obito:</strong>
                            {{ $donante->Causa_obito }}
                        </div>
                        <div class="form-group">
                            <strong>Hla:</strong>
                            {{ $donante->Hla }}
                        </div>
                        <div class="form-group">
                            <strong>Lista Problemas:</strong>
                            {{ $donante->Lista_problemas }}
                        </div>
                        <div class="form-group">
                            <strong>Tipo:</strong>
                            {{ $donante->Tipo }}
                        </div>
                        <div class="form-group">
                            <strong>Historial Cirujiaid:</strong>
                            {{ $donante->Historial_cirujiaID }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
