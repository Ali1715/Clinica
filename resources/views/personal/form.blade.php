<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('Profesion') }}
            {{ Form::text('Profesion', $personal->Profesion, ['class' => 'form-control' . ($errors->has('Profesion') ? ' is-invalid' : ''), 'placeholder' => 'Profesion']) }}
            {!! $errors->first('Profesion', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>