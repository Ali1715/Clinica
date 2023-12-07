<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('Fecha_hora') }}
            {{ Form::date('Fecha_hora', $cirujia->Fecha_hora, ['class' => 'form-control' . ($errors->has('Fecha_hora') ? ' is-invalid' : ''), 'placeholder' => 'Fecha Hora']) }}
            {!! $errors->first('Fecha_hora', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Sala') }}
            {{ Form::text('Sala', $cirujia->Sala, ['class' => 'form-control' . ($errors->has('Sala') ? ' is-invalid' : ''), 'placeholder' => 'Sala']) }}
            {!! $errors->first('Sala', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('PacienteID') }}
            {{ Form::text('PacienteID', $cirujia->PacienteID, ['class' => 'form-control' . ($errors->has('PacienteID') ? ' is-invalid' : ''), 'placeholder' => 'Pacienteid']) }}
            {!! $errors->first('PacienteID', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('EquipoID') }}
            {{ Form::text('EquipoID', $cirujia->EquipoID, ['class' => 'form-control' . ($errors->has('EquipoID') ? ' is-invalid' : ''), 'placeholder' => 'Equipoid']) }}
            {!! $errors->first('EquipoID', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>