@extends('adminlte::page')

@section('template_title')
    {{ __('Update') }} Indicadoreshcirujia
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">{{ __('Update') }} Indicadoreshcirujia</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('indicadoreshcirujias.update', $indicadoreshcirujia->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('indicadoreshcirujia.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
