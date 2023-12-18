<div class="floating-button" id="floatingButton">
    <button id="textSpeechButton" type="button" class="assistant-button">
        <i class="fas fa-microphone"></i>
    </button>
</div>
<div class="box box-info padding-1">
    <div class="box-body">
    <div class="custom-form">
        <div class="form-group">
            {{ Form::label('Diagnostico') }}
            {{ Form::text('diagnóstico', $consulta->Diagnostico, ['nombre' => 'diagnóstico','class' => 'form-control' . ($errors->has('Diagnostico') ? ' is-invalid' : ''), 'placeholder' => 'Diagnostico']) }}
            {!! $errors->first('Diagnostico', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Fechahora') }}
            {{ Form::date('Fechahora', $consulta->Fechahora, ['class' => 'form-control' . ($errors->has('Fechahora') ? ' is-invalid' : ''), 'placeholder' => 'Fechahora']) }}
            {!! $errors->first('Fechahora', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Instrucciones') }}
            {{ Form::text('instrucciones', $consulta->Instrucciones, ['class' => 'form-control' . ($errors->has('Instrucciones') ? ' is-invalid' : ''), 'placeholder' => 'Instrucciones']) }}
            {!! $errors->first('Instrucciones', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Motivo') }}
            {{ Form::text('motivo', $consulta->Motivo, ['class' => 'form-control' . ($errors->has('Motivo') ? ' is-invalid' : ''), 'placeholder' => 'Motivo']) }}
            {!! $errors->first('Motivo', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Observacion') }}
            {{ Form::text('observación', $consulta->Observacion, ['class' => 'form-control' . ($errors->has('Observacion') ? ' is-invalid' : ''), 'placeholder' => 'Observacion']) }}
            {!! $errors->first('Observacion', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('CitaID') }}
            {{ Form::text('cita', $consulta->CitaID, ['class' => 'form-control' . ($errors->has('CitaID') ? ' is-invalid' : ''), 'placeholder' => 'Citaid']) }}
            {!! $errors->first('CitaID', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('PacienteID') }}
            {{ Form::text('paciente', $consulta->PacienteID, ['class' => 'form-control' . ($errors->has('PacienteID') ? ' is-invalid' : ''), 'placeholder' => 'Pacienteid']) }}
            {!! $errors->first('PacienteID', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('DoctorID') }}
            {{ Form::text('doctor', $consulta->DoctorID, ['class' => 'form-control' . ($errors->has('DoctorID') ? ' is-invalid' : ''), 'placeholder' => 'Doctorid']) }}
            {!! $errors->first('DoctorID', '<div class="invalid-feedback">:message</div>') !!}
        </div>
</div>
    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>



@section('css')
@vite(['resources/css/form.css','resources/css/buttomassistant.css'])
@stop

@section('js')

<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
@vite(['resources/js/assistant.js'])
@stop