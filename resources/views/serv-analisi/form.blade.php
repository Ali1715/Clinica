<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('ServicioID') }}
            {{ Form::text('ServicioID', $servAnalisi->ServicioID, ['class' => 'form-control' . ($errors->has('ServicioID') ? ' is-invalid' : ''), 'placeholder' => 'Servicioid']) }}
            {!! $errors->first('ServicioID', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('AnalisisID') }}
            {{ Form::text('AnalisisID', $servAnalisi->AnalisisID, ['class' => 'form-control' . ($errors->has('AnalisisID') ? ' is-invalid' : ''), 'placeholder' => 'Analisisid']) }}
            {!! $errors->first('AnalisisID', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>