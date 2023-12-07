@extends('adminlte::page')
<!-- Agregar estos enlaces en tu archivo HTML -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/handsontable@9.0.1/dist/handsontable.full.min.css">
<script src="https://cdn.jsdelivr.net/npm/handsontable@9.0.1/dist/handsontable.full.min.js"></script>

@section('content')
<div class="container">

    <div class="row">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Plantilla tipo Excel</div>
                <div class="card-body">
                    <div class="form-group">
                       
                    </div>
                    <button id="add-row" class="btn btn-primary">Agregar Fila</button> <!-- Agrega clases de Bootstrap -->
                    <button id="add-column" class="btn btn-primary">Agregar Columna</button> <!-- Agrega clases de Bootstrap -->
                </div>
            </div>
        </div>
    </div>
</div>

<div id="excel-container">
<div style="overflow:visible;">
</div> <!-- Mueve la tabla aquí -->

<script>
    document.addEventListener('DOMContentLoaded', function () {
        var data = [
            [, , ],
            [, , ],
            [, , ]
        ];

        var container = document.getElementById('excel-container');
        var hot = new Handsontable(container, {
            data: data,
            colHeaders: true,
            rowHeaders: true,
            contextMenu: true,
            licenseKey: 'non-commercial-and-evaluation',  // Agrega tu clave de licencia
            stretchH: 'all', // Ajusta el tamaño de las columnas automáticamente
            manualRowResize: true, // Permite redimensionar manualmente las filas
            manualColumnResize: true, // Permite redimensionar manualmente las columnas
            dropdownMenu: true, // Agrega un menú desplegable a las celdas
            filters: true, // Habilita los filtros en las columnas
        });

        // Agregar fila al hacer clic en el botón "Agregar Fila"
        document.getElementById('add-row').addEventListener('click', function () {
            hot.alter('insert_row', hot.countRows()); // Inserta una fila al final
        });

        // Agregar columna al hacer clic en el botón "Agregar Columna"
        document.getElementById('add-column').addEventListener('click', function () {
            hot.alter('insert_col', hot.countCols()); // Inserta una columna al final
        });
    });
</script>
@endsection
