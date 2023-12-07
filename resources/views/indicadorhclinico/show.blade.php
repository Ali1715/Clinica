@extends('adminlte::page')

@section('template_title')
    {{ $indicadorhclinico->name ?? "{{ __('Show') Indicadorhclinico" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Indicadorhclinico</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('indicadorhclinicos.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $indicadorhclinico->Nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Valor:</strong>
                            {{ $indicadorhclinico->Valor }}
                        </div>
                        <div class="form-group">
                            <strong>Historial Clinicoid:</strong>
                            {{ $indicadorhclinico->Historial_clinicoID }}
                        </div>
                        <div class="form-group">
                            <strong>Tipo Indid:</strong>
                            {{ $indicadorhclinico->Tipo_indID }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
