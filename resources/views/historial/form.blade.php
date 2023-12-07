<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('Altura') }}
            {{ Form::text('Altura', $historial->Altura, ['class' => 'form-control' . ($errors->has('Altura') ? ' is-invalid' : ''), 'placeholder' => 'Altura']) }}
            {!! $errors->first('Altura', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Ant_familiar') }}
            {{ Form::text('Ant_familiar', $historial->Ant_familiar, ['class' => 'form-control' . ($errors->has('Ant_familiar') ? ' is-invalid' : ''), 'placeholder' => 'Ant Familiar']) }}
            {!! $errors->first('Ant_familiar', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Ant_personal') }}
            {{ Form::text('Ant_personal', $historial->Ant_personal, ['class' => 'form-control' . ($errors->has('Ant_personal') ? ' is-invalid' : ''), 'placeholder' => 'Ant Personal']) }}
            {!! $errors->first('Ant_personal', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Grupo_sanguineo') }}
            {{ Form::text('Grupo_sanguineo', $historial->Grupo_sanguineo, ['class' => 'form-control' . ($errors->has('Grupo_sanguineo') ? ' is-invalid' : ''), 'placeholder' => 'Grupo Sanguineo']) }}
            {!! $errors->first('Grupo_sanguineo', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Raza') }}
            {{ Form::text('Raza', $historial->Raza, ['class' => 'form-control' . ($errors->has('Raza') ? ' is-invalid' : ''), 'placeholder' => 'Raza']) }}
            {!! $errors->first('Raza', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Sexo') }}
            {{ Form::text('Sexo', $historial->Sexo, ['class' => 'form-control' . ($errors->has('Sexo') ? ' is-invalid' : ''), 'placeholder' => 'Sexo']) }}
            {!! $errors->first('Sexo', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('PacienteID') }}
            {{ Form::text('PacienteID', $historial->PacienteID, ['class' => 'form-control' . ($errors->has('PacienteID') ? ' is-invalid' : ''), 'placeholder' => 'Pacienteid']) }}
            {!! $errors->first('PacienteID', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>