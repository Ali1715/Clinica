@extends('adminlte::page')

@section('template_title')
    {{ $factura->name ?? "{{ __('Show') Factura" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Factura</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('facturas.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Ci:</strong>
                            {{ $factura->Ci }}
                        </div>
                        <div class="form-group">
                            <strong>Descuento:</strong>
                            {{ $factura->Descuento }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha Hora:</strong>
                            {{ $factura->Fecha_hora }}
                        </div>
                        <div class="form-group">
                            <strong>Nit:</strong>
                            {{ $factura->Nit }}
                        </div>
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $factura->Nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Total:</strong>
                            {{ $factura->Total }}
                        </div>
                        <div class="form-group">
                            <strong>Servicioid:</strong>
                            {{ $factura->ServicioID }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
