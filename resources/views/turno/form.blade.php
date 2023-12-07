<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('Hora_fin') }}
            {{ Form::text('Hora_fin', $turno->Hora_fin, ['class' => 'form-control' . ($errors->has('Hora_fin') ? ' is-invalid' : ''), 'placeholder' => 'Hora Fin']) }}
            {!! $errors->first('Hora_fin', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Hora_inicio') }}
            {{ Form::text('Hora_inicio', $turno->Hora_inicio, ['class' => 'form-control' . ($errors->has('Hora_inicio') ? ' is-invalid' : ''), 'placeholder' => 'Hora Inicio']) }}
            {!! $errors->first('Hora_inicio', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('DoctorID') }}
            {{ Form::text('DoctorID', $turno->DoctorID, ['class' => 'form-control' . ($errors->has('DoctorID') ? ' is-invalid' : ''), 'placeholder' => 'Doctorid']) }}
            {!! $errors->first('DoctorID', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>