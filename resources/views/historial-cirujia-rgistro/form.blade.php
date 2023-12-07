<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('Historial_cirujiaID') }}
            {{ Form::text('Historial_cirujiaID', $historialCirujiaRgistro->Historial_cirujiaID, ['class' => 'form-control' . ($errors->has('Historial_cirujiaID') ? ' is-invalid' : ''), 'placeholder' => 'Historial Cirujiaid']) }}
            {!! $errors->first('Historial_cirujiaID', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('CirujiaID') }}
            {{ Form::text('CirujiaID', $historialCirujiaRgistro->CirujiaID, ['class' => 'form-control' . ($errors->has('CirujiaID') ? ' is-invalid' : ''), 'placeholder' => 'Cirujiaid']) }}
            {!! $errors->first('CirujiaID', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>