@extends('adminlte::page')

@section('template_title')
    {{ $especialidad->name ?? "{{ __('Show') Especialidad" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Especialidad</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('especialidads.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $especialidad->Nombre }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
