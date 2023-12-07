<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('uuid') }}
            {{ Form::text('uuid', $failedJob->uuid, ['class' => 'form-control' . ($errors->has('uuid') ? ' is-invalid' : ''), 'placeholder' => 'Uuid']) }}
            {!! $errors->first('uuid', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('connection') }}
            {{ Form::text('connection', $failedJob->connection, ['class' => 'form-control' . ($errors->has('connection') ? ' is-invalid' : ''), 'placeholder' => 'Connection']) }}
            {!! $errors->first('connection', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('queue') }}
            {{ Form::text('queue', $failedJob->queue, ['class' => 'form-control' . ($errors->has('queue') ? ' is-invalid' : ''), 'placeholder' => 'Queue']) }}
            {!! $errors->first('queue', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('payload') }}
            {{ Form::text('payload', $failedJob->payload, ['class' => 'form-control' . ($errors->has('payload') ? ' is-invalid' : ''), 'placeholder' => 'Payload']) }}
            {!! $errors->first('payload', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('exception') }}
            {{ Form::text('exception', $failedJob->exception, ['class' => 'form-control' . ($errors->has('exception') ? ' is-invalid' : ''), 'placeholder' => 'Exception']) }}
            {!! $errors->first('exception', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('failed_at') }}
            {{ Form::text('failed_at', $failedJob->failed_at, ['class' => 'form-control' . ($errors->has('failed_at') ? ' is-invalid' : ''), 'placeholder' => 'Failed At']) }}
            {!! $errors->first('failed_at', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>