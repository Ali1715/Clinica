@extends('adminlte::page')

@section('template_title')
    {{ $indicadoreshcirujium->name ?? "{{ __('Show') Indicadoreshcirujium" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Indicadoreshcirujium</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('indicadoreshcirujia.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $indicadoreshcirujium->Nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Valor:</strong>
                            {{ $indicadoreshcirujium->Valor }}
                        </div>
                        <div class="form-group">
                            <strong>Indicadoreshcirujiaid:</strong>
                            {{ $indicadoreshcirujium->IndicadoreshcirujiaID }}
                        </div>
                        <div class="form-group">
                            <strong>Historial Cirujiaid:</strong>
                            {{ $indicadoreshcirujium->Historial_cirujiaID }}
                        </div>
                        <div class="form-group">
                            <strong>Tipo Indid:</strong>
                            {{ $indicadoreshcirujium->Tipo_indID }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
