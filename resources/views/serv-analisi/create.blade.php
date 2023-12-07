@extends('adminlte::page')

@section('template_title')
    {{ __('Create') }} Serv Analisi
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">{{ __('Create') }} Serv Analisi</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('serv-analisis.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            @include('serv-analisi.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
