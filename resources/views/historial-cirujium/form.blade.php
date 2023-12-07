<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('Fecha_hora') }}
            {{ Form::date('fecha_hora', $historialCirujium->Fecha_hora, ['class' => 'form-control' . ($errors->has('Fecha_hora') ? ' is-invalid' : ''), 'placeholder' => 'Fecha Hora']) }}
            {!! $errors->first('Fecha_hora', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Historial_cirujiaID') }}
            {{ Form::text('Historial_cirujiaID', $historialCirujium->Historial_cirujiaID, ['class' => 'form-control' . ($errors->has('Historial_cirujiaID') ? ' is-invalid' : ''), 'placeholder' => 'Historial Cirujiaid']) }}
            {!! $errors->first('Historial_cirujiaID', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>