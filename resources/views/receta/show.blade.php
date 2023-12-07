@extends('adminlte::page')

@section('template_title')
    {{ $receta->name ?? "{{ __('Show') Receta" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Receta</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('recetas.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Indicaciones:</strong>
                            {{ $receta->Indicaciones }}
                        </div>
                        <div class="form-group">
                            <strong>Historial Clinicoid:</strong>
                            {{ $receta->Historial_clinicoID }}
                        </div>
                        <div class="form-group">
                            <strong>Medicamentoid:</strong>
                            {{ $receta->MedicamentoID }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
