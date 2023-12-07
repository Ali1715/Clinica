@extends('adminlte::page')

@section('template_title')
    {{ $indicadoreshcirujia->name ?? "{{ __('Show') Indicadoreshcirujia" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Indicadoreshcirujia</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('indicadoreshcirujias.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $indicadoreshcirujia->Nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Valor:</strong>
                            {{ $indicadoreshcirujia->Valor }}
                        </div>
                        <div class="form-group">
                            <strong>Historial Cirujiaid:</strong>
                            {{ $indicadoreshcirujia->Historial_cirujiaID }}
                        </div>
                        <div class="form-group">
                            <strong>Tipo Indid:</strong>
                            {{ $indicadoreshcirujia->Tipo_indID }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
