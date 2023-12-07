@extends('adminlte::page')

@section('template_title')
    {{ $doctor->name ?? "{{ __('Show') Doctor" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Doctor</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('doctors.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Fecha Titulo:</strong>
                            {{ $doctor->fecha_titulo }}
                        </div>
                        <div class="form-group">
                            <strong>Especialidadid:</strong>
                            {{ $doctor->EspecialidadID }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
