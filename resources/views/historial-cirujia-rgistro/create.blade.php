@extends('adminlte::page')

@section('template_title')
    {{ __('Create') }} Historial Cirujia Rgistro
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">{{ __('Create') }} Historial Cirujia Rgistro</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('historial-cirujia-rgistros.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            @include('historial-cirujia-rgistro.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
