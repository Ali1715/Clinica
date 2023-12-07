<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('EquipoID') }}
            {{ Form::text('EquipoID', $equipoCirujia->EquipoID, ['class' => 'form-control' . ($errors->has('EquipoID') ? ' is-invalid' : ''), 'placeholder' => 'Equipoid']) }}
            {!! $errors->first('EquipoID', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('UsuarioID') }}
            {{ Form::text('UsuarioID', $equipoCirujia->UsuarioID, ['class' => 'form-control' . ($errors->has('UsuarioID') ? ' is-invalid' : ''), 'placeholder' => 'Usuarioid']) }}
            {!! $errors->first('UsuarioID', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>