@extends('adminlte::page')

@section('template_title')
    {{ __('Create') }} Turno Horario
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">{{ __('Create') }} Turno Horario</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('turno-horarios.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            @include('turno-horario.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
