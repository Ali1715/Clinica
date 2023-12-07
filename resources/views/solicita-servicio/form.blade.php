<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('ServicioID') }}
            {{ Form::text('ServicioID', $solicitaServicio->ServicioID, ['class' => 'form-control' . ($errors->has('ServicioID') ? ' is-invalid' : ''), 'placeholder' => 'Servicioid']) }}
            {!! $errors->first('ServicioID', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('CitaID') }}
            {{ Form::text('CitaID', $solicitaServicio->CitaID, ['class' => 'form-control' . ($errors->has('CitaID') ? ' is-invalid' : ''), 'placeholder' => 'Citaid']) }}
            {!! $errors->first('CitaID', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>