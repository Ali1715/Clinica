@extends('adminlte::page')

@section('template_title')
    {{ __('Update') }} Tratamientoshcli
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">{{ __('Update') }} Tratamientoshcli</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('tratamientoshclis.update', $tratamientoshcli->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('tratamientoshcli.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
