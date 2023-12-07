@extends('adminlte::page')

@section('template_title')
    {{ $historialCirujium->name ?? "{{ __('Show') Historial Cirujium" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Historial Cirujium</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('historial-cirujia.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Fecha Hora:</strong>
                            {{ $historialCirujium->Fecha_hora }}
                        </div>
                        <div class="form-group">
                            <strong>Historial Cirujiaid:</strong>
                            {{ $historialCirujium->Historial_cirujiaID }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
