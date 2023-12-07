@extends('adminlte::page')

@section('template_title')
    {{ __('Update') }} Equipo Cirujium
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">{{ __('Update') }} Equipo Cirujium</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('equipo-cirujia.update', $equipoCirujium->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('equipo-cirujium.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
