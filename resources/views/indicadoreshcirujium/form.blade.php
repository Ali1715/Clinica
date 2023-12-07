<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('Nombre') }}
            {{ Form::text('Nombre', $indicadoreshcirujium->Nombre, ['class' => 'form-control' . ($errors->has('Nombre') ? ' is-invalid' : ''), 'placeholder' => 'Nombre']) }}
            {!! $errors->first('Nombre', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Valor') }}
            {{ Form::text('Valor', $indicadoreshcirujium->Valor, ['class' => 'form-control' . ($errors->has('Valor') ? ' is-invalid' : ''), 'placeholder' => 'Valor']) }}
            {!! $errors->first('Valor', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('IndicadoreshcirujiaID') }}
            {{ Form::text('IndicadoreshcirujiaID', $indicadoreshcirujium->IndicadoreshcirujiaID, ['class' => 'form-control' . ($errors->has('IndicadoreshcirujiaID') ? ' is-invalid' : ''), 'placeholder' => 'Indicadoreshcirujiaid']) }}
            {!! $errors->first('IndicadoreshcirujiaID', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Historial_cirujiaID') }}
            {{ Form::text('Historial_cirujiaID', $indicadoreshcirujium->Historial_cirujiaID, ['class' => 'form-control' . ($errors->has('Historial_cirujiaID') ? ' is-invalid' : ''), 'placeholder' => 'Historial Cirujiaid']) }}
            {!! $errors->first('Historial_cirujiaID', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Tipo_indID') }}
            {{ Form::text('Tipo_indID', $indicadoreshcirujium->Tipo_indID, ['class' => 'form-control' . ($errors->has('Tipo_indID') ? ' is-invalid' : ''), 'placeholder' => 'Tipo Indid']) }}
            {!! $errors->first('Tipo_indID', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>