@extends('adminlte::page')

@section('template_title')
    {{ $cirujium->name ?? "{{ __('Show') Cirujium" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Cirujium</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('cirujia.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Fecha Hora:</strong>
                            {{ $cirujium->Fecha_hora }}
                        </div>
                        <div class="form-group">
                            <strong>Sala:</strong>
                            {{ $cirujium->Sala }}
                        </div>
                        <div class="form-group">
                            <strong>Cirujiaid:</strong>
                            {{ $cirujium->CirujiaID }}
                        </div>
                        <div class="form-group">
                            <strong>Pacienteid:</strong>
                            {{ $cirujium->PacienteID }}
                        </div>
                        <div class="form-group">
                            <strong>Equipoid:</strong>
                            {{ $cirujium->EquipoID }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
