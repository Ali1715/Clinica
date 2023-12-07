<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reporte PDF</title>
</head>
<body>
    <h1>Reporte PDF</h1>

    <p>Total Facturado del Último Mes: ${{ number_format($totalFacturado, 2) }}</p>

    <h2>Detalle de Facturas:</h2>

    <table border="1" cellpadding="5" cellspacing="0">
        <thead>
            <tr>
                <th>Fecha</th>
                <th>Total</th>
                <!-- Agrega más columnas según sea necesario -->
            </tr>
        </thead>
        <tbody>
            @foreach ($facturas as $factura)
                <tr>
                    <td>{{ $factura->Fecha_hora }}</td>
                    <td>${{ number_format($factura->Total, 2) }}</td>
                    <!-- Agrega más columnas según sea necesario -->
                </tr>
            @endforeach
        </tbody>
    </table>

    <!-- Otros datos -->
    <h2>Otros Datos:</h2>
    <p>Total Pacientes Registrados: {{ $otrosDatos['totalPacientes'] }}</p>
    <p>Total Servicios Dados: {{ $otrosDatos['totalServicios'] }}</p>
    <!-- ... otros datos -->
</body>
</html>
