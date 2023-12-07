@extends('adminlte::page')

@section('template_title')
    {{ $historialCirujiaRgistro->name ?? "{{ __('Show') Historial Cirujia Rgistro" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Historial Cirujia Rgistro</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('historial-cirujia-rgistros.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Historial Cirujiaid:</strong>
                            {{ $historialCirujiaRgistro->Historial_cirujiaID }}
                        </div>
                        <div class="form-group">
                            <strong>Cirujiaid:</strong>
                            {{ $historialCirujiaRgistro->CirujiaID }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
