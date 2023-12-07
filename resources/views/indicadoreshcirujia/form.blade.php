<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('Nombre') }}
            {{ Form::text('Nombre', $indicadoreshcirujia->Nombre, ['class' => 'form-control' . ($errors->has('Nombre') ? ' is-invalid' : ''), 'placeholder' => 'Nombre']) }}
            {!! $errors->first('Nombre', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Valor') }}
            {{ Form::text('Valor', $indicadoreshcirujia->Valor, ['class' => 'form-control' . ($errors->has('Valor') ? ' is-invalid' : ''), 'placeholder' => 'Valor']) }}
            {!! $errors->first('Valor', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Historial_cirujiaID') }}
            {{ Form::text('Historial_cirujiaID', $indicadoreshcirujia->Historial_cirujiaID, ['class' => 'form-control' . ($errors->has('Historial_cirujiaID') ? ' is-invalid' : ''), 'placeholder' => 'Historial Cirujiaid']) }}
            {!! $errors->first('Historial_cirujiaID', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Tipo_indID') }}
            {{ Form::text('Tipo_indID', $indicadoreshcirujia->Tipo_indID, ['class' => 'form-control' . ($errors->has('Tipo_indID') ? ' is-invalid' : ''), 'placeholder' => 'Tipo Indid']) }}
            {!! $errors->first('Tipo_indID', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>