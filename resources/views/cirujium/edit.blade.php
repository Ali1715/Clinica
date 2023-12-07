@extends('adminlte::page')

@section('template_title')
    {{ __('Update') }} Cirujium
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">{{ __('Update') }} Cirujium</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('cirujia.update', $cirujium->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('cirujium.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
