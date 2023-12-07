@extends('adminlte::page')

@section('template_title')
    {{ __('Update') }} Tipo Ind
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">{{ __('Update') }} Tipo Ind</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('tipo-inds.update', $tipoInd->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('tipo-ind.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
