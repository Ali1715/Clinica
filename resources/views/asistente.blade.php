@extends('adminlte::page')

@section('title', 'Formulario de Consulta')

@section('content_header')
<h1>Formulario #1</h1>
@stop

@section('content')

<div class="floating-button" id="floatingButton">
    <button id="textSpeechButton" type="button" class="assistant-button">
        <i class="fas fa-microphone"></i>
    </button>
</div>

<div class="content-wrapper">


    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <form class="custom-form">
                            <div class="form-group">
                                <label for="nombre">Nombre del paciente:</label>
                                <input type="text" id="nombre" name="nombre" required>
                                <!-- Agrega el botón de micrófono -->
                            </div>

                            <div class="form-group">
                                <label for="fecha_nacimiento">Fecha de nacimiento:</label>
                                <input type="date" id="fecha de nacimiento" name="fecha de nacimiento" required>
                            </div>

                            <!-- Otros campos del formulario -->
                            <div class="form-group">
                                <label for="direccion">Dirección:</label>
                                <input type="text" id="direccion" name="dirección" required><br>
                            </div>
                            <div class="form-group">
                                <label for="telefono">Teléfono:</label>
                                <input type="integer" id="telefono" name="teléfono" required><br>
                            </div>
                            <div class="form-group">
                                <label for="email">Email:</label>
                                <input type="email" id="email" name="email" required><br>
                            </div>
                            <div class="form-group">
                                <label for="fecha_consulta">Fecha de la consulta:</label>
                                <input type="date" id="fecha de la consulta" name="fecha de la consulta" required><br>
                            </div>

                            <div class="form-group">
                                <label for="historia_clinica">Resumen historia clínica y examen físico:</label>
                                <textarea id="resumen historia clínica" name="resumen historia clínica" rows="4"
                                    required></textarea>
                            </div>

                            <!-- Otros campos del formulario -->
                            <div class="form-group">
                                <label for="nefropatia">Nefropatía:</label>
                                <input type="text" id="nefropatía" name="nefropatía"><br>
                            </div>

                            <div class="form-group">
                                <label for="grupo_sanguineo">Grupo Sanguíneo ABO:</label>
                                <input type="text" id="grupo sanguíneo" name="grupo sanguíneo"><br>
                            </div>

                            <div class="form-group">
                                <label for="virus_hepatitis_b">VHB (Fecha):</label>
                                <input type="text" id="virus hepatitis b" name="virus hepatitis b">
                                <input type="date" id="virus hepatitis b" name="virus hepatitis b"><br>
                            </div>

                            <div class="form-group">
                                <label for="virus_hepatitis_c">VHC (Fecha):</label>
                                <input type="text" id="virus hepatitis c" name="virus hepatitis c">
                                <input type="date" id="virus hepatitis c" name="virus hepatitis c"><br>
                            </div>

                            <div class="form-group">
                                <label for="vih">VIH (Fecha):</label>
                                <input type="text" id="vih" name="vih">
                                <input type="date" id="vih" name="vih"><br>
                            </div>

                            <div class="form-group">
                                <label for="cmv">CMV (Fecha):</label>
                                <input type="text" id="cmv" name="cmv">
                                <input type="date" id="cmv" name="cmv"><br>
                            </div>

                            <div class="form-group">
                                <label for="ebv">EBV (Fecha):</label>
                                <input type="text" id="ebv" name="ebv">
                                <input type="date" id="ebv" name="ebv"><br>
                            </div>

                            <div class="form-group">
                                <label for="fecha_dialisis">Fecha 1ª Diálisis:</label>
                                <input type="date" id="fecha_dialisis" name="fecha_dialisis"><br>
                            </div>

                            <div class="form-group">
                                <label for="vacunas">Vacunas:</label>
                                <input type="text" id="vacunas" name="vacunas"><br>
                            </div>

                            <div class="form-group">
                                <label for="grupo_donante">Grupo Sanguíneo del Donante:</label>
                                <select id="grupo sanguíneo del donante" name="grupo sanguíneo del donante">
                                    <option value="A+">A+</option>
                                    <option value="A-">A-</option>
                                    <option value="B+">B+</option>
                                    <option value="B-">B-</option>
                                    <option value="AB+">AB+</option>
                                    <option value="AB-">AB-</option>
                                    <option value="O+">O+</option>
                                    <option value="O-">O-</option>
                                    < </select>
                                        <br>
                            </div>


                            <div class="form-group">
                                <label for="tipo_donante">Tipo del Donante:</label>
                                <input type="radio" id="vivo" name="tipo_donante" value="vivo">
                                <label for="vivo">Vivo</label>
                                <input type="radio" id="cadaver" name="tipo_donante" value="cadaver">
                                <label for="cadaver">Cadáver</label>
                                <br>
                            </div>

                            <!-- Otros campos del formulario -->

                            <div class="form-group">
                                <label for="causa_obito">Causa del Óbito:</label>
                                <input type="text" id="causa del óbito" name="causa del óbito">
                            </div>

                            <!-- Otros campos del formulario -->
                            <div class="form-group">
                                <label for="hla">Histo compatibilidad HLA:</label>
                                <input type="text" id="hla" name="hla"><br>
                            </div>


                            <div class="form-group">
                                <label for="lista_problemas">Lista de Problemas:</label>
                                <textarea id="lista de problemas" name="lista de problemas" rows="4"
                                    required></textarea>
                                <label for="fecha_lista_problemas">Fecha:</label>
                                <input type="date" id="fecha_lista_problemas" name="fecha_lista_problemas">
                            </div>

                            <!-- Botón de envío -->
                            <div class="form-group">
                                <button type="submit">Guardar Consulta</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>

    </div>

</div>

@stop

@section('css')
@vite(['resources/css/form.css','resources/css/buttomassistant.css'])
@stop

@section('js')

<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
@vite(['resources/js/assistant.js'])
@stop