@extends('adminlte::page')

@section('template_title')
    {{ __('Update') }} Consultum
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">{{ __('Update') }} Consultum</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('consulta.update', $consultum->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('consultum.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
