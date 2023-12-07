@extends('adminlte::page')

@section('template_title')
    {{ $cirujia->name ?? "{{ __('Show') Cirujia" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Cirujia</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('cirujias.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Fecha Hora:</strong>
                            {{ $cirujia->Fecha_hora }}
                        </div>
                        <div class="form-group">
                            <strong>Sala:</strong>
                            {{ $cirujia->Sala }}
                        </div>
                        <div class="form-group">
                            <strong>Pacienteid:</strong>
                            {{ $cirujia->PacienteID }}
                        </div>
                        <div class="form-group">
                            <strong>Equipoid:</strong>
                            {{ $cirujia->EquipoID }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
