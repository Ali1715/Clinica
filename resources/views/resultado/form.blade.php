<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('Fecha_hora') }}
            {{ Form::date('Fecha_hora', $resultado->Fecha_hora, ['class' => 'form-control' . ($errors->has('Fecha_hora') ? ' is-invalid' : ''), 'placeholder' => 'Fecha Hora']) }}
            {!! $errors->first('Fecha_hora', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Resultado') }}
            {{ Form::text('Resultado', $resultado->Resultado, ['class' => 'form-control' . ($errors->has('Resultado') ? ' is-invalid' : ''), 'placeholder' => 'Resultado']) }}
            {!! $errors->first('Resultado', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Serv_analisisID') }}
            {{ Form::text('Serv_analisisID', $resultado->Serv_analisisID, ['class' => 'form-control' . ($errors->has('Serv_analisisID') ? ' is-invalid' : ''), 'placeholder' => 'Serv Analisisid']) }}
            {!! $errors->first('Serv_analisisID', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>