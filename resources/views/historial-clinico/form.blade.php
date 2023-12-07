<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('Enf_actual') }}
            {{ Form::text('Enf_actual', $historialClinico->Enf_actual, ['class' => 'form-control' . ($errors->has('Enf_actual') ? ' is-invalid' : ''), 'placeholder' => 'Enf Actual']) }}
            {!! $errors->first('Enf_actual', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Fecha_hora') }}
            {{ Form::date('Fecha_hora', $historialClinico->Fecha_hora, ['class' => 'form-control' . ($errors->has('Fecha_hora') ? ' is-invalid' : ''), 'placeholder' => 'Fecha Hora']) }}
            {!! $errors->first('Fecha_hora', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Hip_diagnostico') }}
            {{ Form::text('Hip_diagnostico', $historialClinico->Hip_diagnostico, ['class' => 'form-control' . ($errors->has('Hip_diagnostico') ? ' is-invalid' : ''), 'placeholder' => 'Hip Diagnostico']) }}
            {!! $errors->first('Hip_diagnostico', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('ConsultaID') }}
            {{ Form::text('ConsultaID', $historialClinico->ConsultaID, ['class' => 'form-control' . ($errors->has('ConsultaID') ? ' is-invalid' : ''), 'placeholder' => 'Consultaid']) }}
            {!! $errors->first('ConsultaID', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>