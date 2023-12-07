<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('Indicaciones') }}
            {{ Form::text('Indicaciones', $receta->Indicaciones, ['class' => 'form-control' . ($errors->has('Indicaciones') ? ' is-invalid' : ''), 'placeholder' => 'Indicaciones']) }}
            {!! $errors->first('Indicaciones', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Historial_clinicoID') }}
            {{ Form::text('Historial_clinicoID', $receta->Historial_clinicoID, ['class' => 'form-control' . ($errors->has('Historial_clinicoID') ? ' is-invalid' : ''), 'placeholder' => 'Historial Clinicoid']) }}
            {!! $errors->first('Historial_clinicoID', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('MedicamentoID') }}
            {{ Form::text('MedicamentoID', $receta->MedicamentoID, ['class' => 'form-control' . ($errors->has('MedicamentoID') ? ' is-invalid' : ''), 'placeholder' => 'Medicamentoid']) }}
            {!! $errors->first('MedicamentoID', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>