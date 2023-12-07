@extends('adminlte::page')

@section('template_title')
    {{ $tratamientoshcir->name ?? "{{ __('Show') Tratamientoshcir" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Tratamientoshcir</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('tratamientoshcirs.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Descripcion:</strong>
                            {{ $tratamientoshcir->Descripcion }}
                        </div>
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $tratamientoshcir->Nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Historial Cirujiaid:</strong>
                            {{ $tratamientoshcir->Historial_cirujiaID }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
