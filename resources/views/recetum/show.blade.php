@extends('adminlte::page')

@section('template_title')
    {{ $recetum->name ?? "{{ __('Show') Recetum" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Recetum</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('receta.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Indicaciones:</strong>
                            {{ $recetum->Indicaciones }}
                        </div>
                        <div class="form-group">
                            <strong>Recetaid:</strong>
                            {{ $recetum->RecetaID }}
                        </div>
                        <div class="form-group">
                            <strong>Historial Clinicoid:</strong>
                            {{ $recetum->Historial_clinicoID }}
                        </div>
                        <div class="form-group">
                            <strong>Medicamentoid:</strong>
                            {{ $recetum->MedicamentoID }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
