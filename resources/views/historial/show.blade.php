@extends('adminlte::page')

@section('template_title')
    {{ $historial->name ?? "{{ __('Show') Historial" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Historial</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('historials.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Altura:</strong>
                            {{ $historial->Altura }}
                        </div>
                        <div class="form-group">
                            <strong>Ant Familiar:</strong>
                            {{ $historial->Ant_familiar }}
                        </div>
                        <div class="form-group">
                            <strong>Ant Personal:</strong>
                            {{ $historial->Ant_personal }}
                        </div>
                        <div class="form-group">
                            <strong>Grupo Sanguineo:</strong>
                            {{ $historial->Grupo_sanguineo }}
                        </div>
                        <div class="form-group">
                            <strong>Raza:</strong>
                            {{ $historial->Raza }}
                        </div>
                        <div class="form-group">
                            <strong>Sexo:</strong>
                            {{ $historial->Sexo }}
                        </div>
                        <div class="form-group">
                            <strong>Pacienteid:</strong>
                            {{ $historial->PacienteID }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
