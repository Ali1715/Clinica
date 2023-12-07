<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('Fechahora') }}
            {{ Form::date('Fechahora', $cita->Fechahora, ['class' => 'form-control' . ($errors->has('Fechahora') ? ' is-invalid' : ''), 'placeholder' => 'Fechahora']) }}
            {!! $errors->first('Fechahora', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('PacienteID') }}
            {{ Form::text('PacienteID', $cita->PacienteID, ['class' => 'form-control' . ($errors->has('PacienteID') ? ' is-invalid' : ''), 'placeholder' => 'Pacienteid']) }}
            {!! $errors->first('PacienteID', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('PersonalID') }}
            {{ Form::text('PersonalID', $cita->PersonalID, ['class' => 'form-control' . ($errors->has('PersonalID') ? ' is-invalid' : ''), 'placeholder' => 'Personalid']) }}
            {!! $errors->first('PersonalID', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('TurnoID') }}
            {{ Form::text('TurnoID', $cita->TurnoID, ['class' => 'form-control' . ($errors->has('TurnoID') ? ' is-invalid' : ''), 'placeholder' => 'Turnoid']) }}
            {!! $errors->first('TurnoID', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('EspecialidadID') }}
            {{ Form::text('EspecialidadID', $cita->EspecialidadID, ['class' => 'form-control' . ($errors->has('EspecialidadID') ? ' is-invalid' : ''), 'placeholder' => 'Especialidadid']) }}
            {!! $errors->first('EspecialidadID', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>