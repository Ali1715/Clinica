<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('Ci') }}
            {{ Form::text('Ci', $paciente->Ci, ['class' => 'form-control' . ($errors->has('Ci') ? ' is-invalid' : ''), 'placeholder' => 'Ci']) }}
            {!! $errors->first('Ci', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Direccion') }}
            {{ Form::text('Direccion', $paciente->Direccion, ['class' => 'form-control' . ($errors->has('Direccion') ? ' is-invalid' : ''), 'placeholder' => 'Direccion']) }}
            {!! $errors->first('Direccion', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Email') }}
            {{ Form::text('Email', $paciente->Email, ['class' => 'form-control' . ($errors->has('Email') ? ' is-invalid' : ''), 'placeholder' => 'Email']) }}
            {!! $errors->first('Email', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Estado_civil') }}
            {{ Form::text('Estado_civil', $paciente->Estado_civil, ['class' => 'form-control' . ($errors->has('Estado_civil') ? ' is-invalid' : ''), 'placeholder' => 'Estado Civil']) }}
            {!! $errors->first('Estado_civil', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Fecha_nacimiento') }}
            {{ Form::date('Fecha_nacimiento', $paciente->Fecha_nacimiento, ['class' => 'form-control' . ($errors->has('Fecha_nacimiento') ? ' is-invalid' : ''), 'placeholder' => 'Fecha Nacimiento']) }}
            {!! $errors->first('Fecha_nacimiento', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Lugar_nacimiento') }}
            {{ Form::text('Lugar_nacimiento', $paciente->Lugar_nacimiento, ['class' => 'form-control' . ($errors->has('Lugar_nacimiento') ? ' is-invalid' : ''), 'placeholder' => 'Lugar Nacimiento']) }}
            {!! $errors->first('Lugar_nacimiento', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Nacionalidad') }}
            {{ Form::text('Nacionalidad', $paciente->Nacionalidad, ['class' => 'form-control' . ($errors->has('Nacionalidad') ? ' is-invalid' : ''), 'placeholder' => 'Nacionalidad']) }}
            {!! $errors->first('Nacionalidad', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Nombre') }}
            {{ Form::text('Nombre', $paciente->Nombre, ['class' => 'form-control' . ($errors->has('Nombre') ? ' is-invalid' : ''), 'placeholder' => 'Nombre']) }}
            {!! $errors->first('Nombre', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Profesion') }}
            {{ Form::text('Profesion', $paciente->Profesion, ['class' => 'form-control' . ($errors->has('Profesion') ? ' is-invalid' : ''), 'placeholder' => 'Profesion']) }}
            {!! $errors->first('Profesion', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Telefono') }}
            {{ Form::text('Telefono', $paciente->Telefono, ['class' => 'form-control' . ($errors->has('Telefono') ? ' is-invalid' : ''), 'placeholder' => 'Telefono']) }}
            {!! $errors->first('Telefono', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>