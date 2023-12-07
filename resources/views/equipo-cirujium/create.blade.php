@extends('adminlte::page')

@section('template_title')
    {{ __('Create') }} Equipo Cirujium
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">{{ __('Create') }} Equipo Cirujium</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('equipo-cirujia.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            @include('equipo-cirujium.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
