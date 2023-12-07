<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('Dia') }}
            {{ Form::text('Dia', $horario->Dia, ['class' => 'form-control' . ($errors->has('Dia') ? ' is-invalid' : ''), 'placeholder' => 'Dia']) }}
            {!! $errors->first('Dia', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Hora_fin') }}
            {{ Form::text('Hora_fin', $horario->Hora_fin, ['class' => 'form-control' . ($errors->has('Hora_fin') ? ' is-invalid' : ''), 'placeholder' => 'Hora Fin']) }}
            {!! $errors->first('Hora_fin', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Hora_inicio') }}
            {{ Form::text('Hora_inicio', $horario->Hora_inicio, ['class' => 'form-control' . ($errors->has('Hora_inicio') ? ' is-invalid' : ''), 'placeholder' => 'Hora Inicio']) }}
            {!! $errors->first('Hora_inicio', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Intervalos') }}
            {{ Form::text('Intervalos', $horario->Intervalos, ['class' => 'form-control' . ($errors->has('Intervalos') ? ' is-invalid' : ''), 'placeholder' => 'Intervalos']) }}
            {!! $errors->first('Intervalos', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Turnos_disponibles') }}
            {{ Form::text('Turnos_disponibles', $horario->Turnos_disponibles, ['class' => 'form-control' . ($errors->has('Turnos_disponibles') ? ' is-invalid' : ''), 'placeholder' => 'Turnos Disponibles']) }}
            {!! $errors->first('Turnos_disponibles', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>