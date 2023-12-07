@extends('adminlte::page')

@section('template_title')
    {{ $equipoCirujium->name ?? "{{ __('Show') Equipo Cirujium" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Equipo Cirujium</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('equipo-cirujia.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Equipoid:</strong>
                            {{ $equipoCirujium->EquipoID }}
                        </div>
                        <div class="form-group">
                            <strong>Usuarioid:</strong>
                            {{ $equipoCirujium->UsuarioID }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
