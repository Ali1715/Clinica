@extends('adminlte::page')

@section('template_title')
    {{ $transplante->name ?? "{{ __('Show') Transplante" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Transplante</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('transplantes.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $transplante->Nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Valor:</strong>
                            {{ $transplante->Valor }}
                        </div>
                        <div class="form-group">
                            <strong>Historial Cirujiaid:</strong>
                            {{ $transplante->Historial_cirujiaID }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
