@extends('adminlte::page')

@section('template_title')
    {{ __('Update') }} Historial Clinico
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">{{ __('Update') }} Historial Clinico</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('historial-clinicos.update', $historialClinico->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('historial-clinico.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
