@extends('adminlte::page')

@section('template_title')
    {{ $failedJob->name ?? "{{ __('Show') Failed Job" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Failed Job</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('failed-jobs.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Uuid:</strong>
                            {{ $failedJob->uuid }}
                        </div>
                        <div class="form-group">
                            <strong>Connection:</strong>
                            {{ $failedJob->connection }}
                        </div>
                        <div class="form-group">
                            <strong>Queue:</strong>
                            {{ $failedJob->queue }}
                        </div>
                        <div class="form-group">
                            <strong>Payload:</strong>
                            {{ $failedJob->payload }}
                        </div>
                        <div class="form-group">
                            <strong>Exception:</strong>
                            {{ $failedJob->exception }}
                        </div>
                        <div class="form-group">
                            <strong>Failed At:</strong>
                            {{ $failedJob->failed_at }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
