<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('Causa_obito') }}
            {{ Form::text('Causa_obito', $donante->Causa_obito, ['class' => 'form-control' . ($errors->has('Causa_obito') ? ' is-invalid' : ''), 'placeholder' => 'Causa Obito']) }}
            {!! $errors->first('Causa_obito', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Hla') }}
            {{ Form::text('Hla', $donante->Hla, ['class' => 'form-control' . ($errors->has('Hla') ? ' is-invalid' : ''), 'placeholder' => 'Hla']) }}
            {!! $errors->first('Hla', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Lista_problemas') }}
            {{ Form::text('Lista_problemas', $donante->Lista_problemas, ['class' => 'form-control' . ($errors->has('Lista_problemas') ? ' is-invalid' : ''), 'placeholder' => 'Lista Problemas']) }}
            {!! $errors->first('Lista_problemas', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Tipo') }}
            {{ Form::text('Tipo', $donante->Tipo, ['class' => 'form-control' . ($errors->has('Tipo') ? ' is-invalid' : ''), 'placeholder' => 'Tipo']) }}
            {!! $errors->first('Tipo', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Historial_cirujiaID') }}
            {{ Form::text('Historial_cirujiaID', $donante->Historial_cirujiaID, ['class' => 'form-control' . ($errors->has('Historial_cirujiaID') ? ' is-invalid' : ''), 'placeholder' => 'Historial Cirujiaid']) }}
            {!! $errors->first('Historial_cirujiaID', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>