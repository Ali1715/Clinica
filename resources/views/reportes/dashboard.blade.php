<!DOCTYPE html>

<html lang="es">
<!-- head -->

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <!-- Agrega enlaces a Bootstrap y Chart.js (CDN) -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.css">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="https://cdn.flexmonster.com/flexmonster.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <link rel="stylesheet" href="https://cdn.flexmonster.com/demo.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <!-- Favicon - loaded as static -->
    <link rel="icon" href="/myapp/static/assets/img/brand/favicon.png" type="image/png">
    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
    <!-- Icons -->
    <link rel="stylesheet" href="/myapp/static/assets/vendor/nucleo/css/nucleo.css" type="text/css">
    <link rel="stylesheet" href="/myapp/static/assets/vendor/@fortawesome/fontawesome-free/css/all.min.css"
        type="text/css">
    <!-- Page plugins -->
    <!-- Argon CSS -->
    <link rel="stylesheet" href="/myapp/static/assets/css/argon.css?v=1.2.0" type="text/css">
</head>
@extends('adminlte::page')
@section('content')

<body>

    <div class="header bg-dark pb-lg-3" style="top: 20px;">
        <div class="container-fluid">
            <div class="header-body">
                <!-- Navbar -->

                <!--Sidebar panel, para agregar filtros a mis graficas de char.js-->
                <div class="container-fluid">
                    <div class="row">
                        <!--Fin del sidebar-->

                        <!--Contenido de la pagina-->
                        <main role="main" class=" ml-sm-auto col-lg-12 ">
                        <div>
                                <a href="{{ url('/generate-pdf') }}" class="btn btn-primary">Generar PDF</a>
                                <a href="{{ url('/generate-csv') }}" class="btn btn-primary">Generar CSV</a>
                            </div>
                            <!-- Card stats -->
                            <div class="row">
                                <!--ventas total-->
                                <div class="col-xl-3 col-md-6">

                             
                            <div class="card card-stats">
                                <!-- Card body -->
                                <div class="card-body" style="background-color: lightblue;">
                                    <div class="row">
                                        <div class="col">
                                            <h5 class="card-title text-uppercase text-muted mb-0">TOTAL DE PACIENTES
                                                REGISTRADOS EN EL SISTEMA</h5>
                                            <span class="h2 font-weight-bold mb-0">
                                                <thead>
                                                    <tr>
                                                        <th>Total</th>
                                                    </tr>
                                                </thead>
                                                <tbody>

                                                    <tr>
                                                        <td>{{ $totalPacientes }}</td>
                                                    </tr>

                                                </tbody>
                                            </span>

                                        </div>
                                        <div class="col-auto">
                                            <div
                                                class="icon icon-shape bg-gradient-red text-white rounded-circle shadow">
                                                <i class="ni ni-active-40"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <p class="mt-3 mb-0 text-sm">
                                        <span id="porcentajeCambio" class="text-success mr-2"><i
                                                class="fa fa-arrow-up"></i></span>
                                        <span class="text-nowrap">v</span>
                                    </p>
                                </div>
                            </div>
                    </div>
                    <!--Tasa de Obsolencia-->
                    <div class="col-xl-3 col-md-6">
                        <div class="card card-stats">
                            <!-- Card body -->
                            <div class="card-body" style="background-color:aquamarine">
                                <div class="row">
                                    <div class="col">
                                        <h5 class="card-title text-uppercase text-muted mb-0">Cantidad de pacientes que
                                            recibieron cirujias</h5>
                                        <span class="h2 font-weight-bold mb-0">
                                            <thead>
                                                <tr>
                                                    <th>Pacientes</th>
                                                </tr>
                                            </thead>
                                            <tbody>

                                                <tr>
                                                    <td>{{ $totalCirugias }}</td>
                                                </tr>

                                            </tbody>
                                        </span>
                                    </div>
                                    <div class="col-auto">
                                        <div
                                            class="icon icon-shape bg-gradient-orange text-white rounded-circle shadow">
                                            <i class="ni ni-chart-pie-35"></i>
                                        </div>
                                    </div>
                                </div>
                                <p class="mt-3 mb-0 text-sm">
                                    <span class="text-success mr-2"><i class="fa fa-arrow-up"></i> </span>
                                    <span class="text-nowrap"></span>
                                </p>
                            </div>
                        </div>
                    </div>
                    <!--Rotacion Inventario-->
                    <div class="col-xl-3 col-md-6">
                        <div class="card card-stats">
                            <!-- Card body -->
                            <div class="card-body" style="background-color:darksalmon">
                                <div class="row">
                                    <div class="col">
                                        <h5 class="card-title text-uppercase text-muted mb-0">TOTAL DE ANÁLISIS
                                            SOLICITADOS HASTA LA FECHA ACTUAL</h5>
                                        <span class="h2 font-weight-bold mb-0">
                                            <thead>
                                                <tr>
                                                    <th>TOTAL</th>
                                                </tr>
                                            </thead>
                                            <tbody>

                                                <tr>
                                                    <td>{{ $totalAnalisis }}</td>
                                                </tr>

                                            </tbody>
                                        </span>
                                    </div>
                                    <div class="col-auto">
                                        <div class="icon icon-shape bg-gradient-green text-white rounded-circle shadow">
                                            <i class="ni ni-money-coins"></i>
                                        </div>
                                    </div>
                                </div>
                                <p class="mt-3 mb-0 text-sm">
                                    <span class="text-success mr-2"><i class="fa fa-arrow-up"></i> </span>
                                    <span class="text-nowrap"> </span>
                                </p>
                            </div>
                        </div>
                    </div>
                    <!--Valor Inventario-->
                    <div class="col-xl-3 col-md-6">
                        <div class="card card-stats">
                            <!-- Card body -->
                            <div class="card-body" style="background-color:skyblue">
                                <div class="row">
                                    <div class="col">
                                        <h5 class="card-title text-uppercase text-muted mb-0">TOTAL DE MONTO FACTURADO
                                            EN EL ULTIMO MES</h5>
                                        <span class="h2 font-weight-bold mb-0">
                                            <thead>
                                                <tr>
                                                    <th>TOTAL</th>
                                                </tr>
                                            </thead>
                                            <tbody>

                                                <tr>
                                                    <td>{{ $totalFacturado }}BS</td>
                                                </tr>

                                            </tbody>
                                        </span>
                                    </div>
                                    <div class="col-auto">
                                        <div class="icon icon-shape bg-gradient-info text-white rounded-circle shadow">
                                            <i class="ni ni-chart-bar-32"></i>
                                        </div>
                                    </div>
                                </div>
                                <p class="mt-3 mb-0 text-sm">
                                    <span class="text-success mr-2"><i class="fa fa-arrow-up"></i> </span>
                                    <span class="text-nowrap"> </span>
                                </p>
                            </div>
                        </div>
                    </div>

                </div>

                <!-- Sección de Lista de Ventas y Gráfico Pastel -->

                <div class="row">
                    <!-- Gráfico Pastel-Tendencias -->
                    <!-- Sección de Lista de Ventas y Gráfico Pastel -->
                    <div class="container mt-4  " style="max-width: -webkit-fill-available;">

                        <div class="card-deck">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title" style="color: black;">DIAGNÓSTICOS MÁS COMUNES </h5>
                                    <p class="card-text"></p>

                                </div>
                            </div>

                            <!-- Agrega más cards según sea necesario -->
                        </div>

                        <div class="col-md-6">

                            <canvas id="diagnosticosChart"></canvas>

                        </div>
                    </div>








                </div>

                <!--Analisis de estacionalidad y Nivel de Inventario-->
                <div class="container mt-4  " style="max-width: -webkit-fill-available;">

                    <div class="card-deck">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title" style="color: black;">ANÁLISIS MÁS SOLICITADOS</h5>
                                <p class="card-text"></p>

                            </div>
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title" style="color: black;">MÉDICOS MÁS SOLICITADOS</h5>
                                <p class="card-text" style="color: black;">en el ultimo mes</p>
                            </div>
                        </div>
                        <!-- Agrega más cards según sea necesario -->
                    </div>

                </div>

                <!-- Sección de Gráficos -->
                <div class="container mt-6" style="max-width: -webkit-fill-available;">
                    <div class="row">
                        <div class="col-md-6 ">
                            <!-- Gráfico de Barra -->

                            <canvas id="analisisChart" width="400" height="400"></canvas>
                        </div>
                        <div class="col-md-6">
                            <!-- Gráfico Barra -->
                            <canvas id="medicosChart" width="400" height="400"></canvas>

                        </div>
                    </div>
                </div>




            </div>

        </div>
    </div>
    </div>
    </div>
    {% load static %}
    </div>
    <!-- Configuración de los Gráficos con Chart.js -->
    <script src="{% static 'graficaschartjs.js' %}"></script>

    <!-- Tendencia-->
    <!--<script src="{% static 'tendencias_temporada.js' %}"></script>-->

    <!-- Agrega este script al final del cuerpo de tu documento -->


    <script src="{% static 'ventastotalporc.js' %}"></script>

    <!--Tendencias Estacionales-->
    <script src="{% static 'tendendias_estacionales.js' %}"></script>

    <!-- Pronostico de Demandas-->
    <script src="{% static 'prediccion_demanda.js' %}"></script>

    <script>
    var ctx = document.getElementById('analisisChart').getContext('2d');

    var labels = <?php echo json_encode($analisisMasSolicitados->pluck('nombre_analisis')); ?>;
    var data = <?php echo json_encode($analisisMasSolicitados->pluck('total')); ?>;

    var chart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: labels,
            datasets: [{
                label: 'Cantidad de Solicitudes',
                data: data,
                backgroundColor: 'rgba(75, 192, 192, 0.7)',
                borderWidth: 1,
            }],
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            scales: {
                x: {
                    type: 'category',
                },
                y: {
                    beginAtZero: true,
                    stepSize: 1,
                },
            },
        },
    });
    </script>
    <script>
    var ctx = document.getElementById('medicosChart').getContext('2d');

    var nombresMedicos = <?php echo json_encode($medicosSolicitados->pluck('nombre_doctor'))  ?>;
    var cantidadesSolicitudes = <?php echo json_encode($medicosSolicitados->pluck('total'))  ?>;

    var chart = new Chart(ctx, {
        type: 'pie',
        data: {
            labels: nombresMedicos,
            datasets: [{
                data: cantidadesSolicitudes,
                backgroundColor: [
                    'rgba(255, 99, 132, 0.7)',
                    'rgba(75, 192, 192, 0.7)',
                    'rgba(255, 205, 86, 0.7)',
                    // Puedes agregar más colores según sea necesario
                ],
                borderWidth: 1,
            }],
        },
        options: {
            responsive: true,
        },
    });
    </script>

    <script>
    var ctx = document.getElementById('diagnosticosChart').getContext('2d');

    var nombresDiagnosticos = <?php echo json_encode($diagnosticosComunes->pluck('Diagnostico')) ?>;
    var cantidadesDiagnosticos = <?php echo json_encode($diagnosticosComunes->pluck('total')) ?>;

    var chart = new Chart(ctx, {
        type: 'line',
        data: {
            labels: nombresDiagnosticos,
            datasets: [{
                label: 'Cantidad de Ocurrencias',
                data: cantidadesDiagnosticos,
                borderColor: 'rgba(75, 192, 192, 1)',
                borderWidth: 2,
                fill: false,
            }],
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            scales: {
                x: {
                    type: 'category',
                },
                y: {
                    beginAtZero: true,
                    stepSize: 1,
                },
            },
        },
    });
    </script>


    @endsection



</body>

</html>