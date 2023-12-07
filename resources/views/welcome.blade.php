<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bienvenido a la Clínica del Riñón</title>
    <link rel="stylesheet" href="tu_estilo.css">
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            line-height: 1.6;
            color: #333;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            background-color: #f4f4f4;
        }

        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
            text-align: center; /* Centra el contenido en el contenedor */
        }

        h1, h2, h3 {
            color: #333;
        }

        img {
            max-width: 100%;
            height: auto;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
        }

        .grid {
            display: grid;
            grid-template-columns: 1fr;
            gap: 20px;
        }

        @media (min-width: 768px) {
            .grid {
                grid-template-columns: repeat(2, 1fr);
            }
        }

        .card {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .text-center {
            text-align: center;
        }

        .text-gray {
            color: #666;
        }

        /* Estilos para los botones */
        .btn {
            display: inline-block;
            padding: 10px 20px;
            text-decoration: none;
            color: #fff;
            border-radius: 5px;
            font-weight: bold;
            cursor: pointer;
        }

        .btn-primary {
            background-color: #3498db;
        }

        .btn-secondary {
            background-color: #e74c3c;
        }

        .mt-8 {
            margin-top: 8px;
        }

        /* Estilo para la imagen centrada */
        .centered-image {
            display: block;
            margin-left: auto;
            margin-right: auto;
            width: 50%; /* Puedes ajustar el tamaño según sea necesario */
        }

        /* Estilo para los botones en la esquina superior derecha */
        .top-right-buttons {
            position: absolute;
            top: 20px;
            right: 20px;
        }

        /* Estilo para el botón debajo de la imagen */
        .btn-below-image {
            display: block;
            margin: 20px auto; /* Espaciado y centrado */
            padding: 10px 20px;
            text-decoration: none;
            color: #fff;
            border-radius: 5px;
            background-color: #27ae60;
            font-weight: bold;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <div class="container">
        <!-- Botones de redirección en la esquina superior derecha -->
        <div class="top-right-buttons">
            <a href="/login" class="btn btn-primary">Ir a Login</a>
            <a href="/register" class="btn btn-secondary">Ir a Registro</a>
        </div>

        <h1 class="text-4xl font-semibold text-center text-gray">Bienvenido a la Clínica del Riñón</h1>
        <p class="text-lg text-center text-gray mb-8">Cuidando de tu salud renal con profesionalismo y dedicación.</p>
        
        <img src="vendor/adminlte/dist/img/clinica.jpg" alt="Imagen del riñón" class="centered-image" width="300">

        <!-- Botón debajo de la imagen -->
        <a href="{{ route('index') }}" class="btn-below-image">Consultar Precio de Analisis Mediante IA de Imagen</a>

        <div class="grid">
            <div class="card">
                <h2 class="text-2xl font-semibold text-gray mb-4">Nuestros Servicios</h2>
                <ul class="list-disc pl-4">
                    <li>Diagnóstico y tratamiento de enfermedades renales.</li>
                    <li>Diálisis y trasplante renal.</li>
                    <li>Consulta con nefrólogos especializados.</li>
                    <!-- Agrega más servicios según sea necesario -->
                </ul>
            </div>

            <div class="card">
                <h2 class="text-2xl font-semibold text-gray mb-4">¿Por qué elegirnos?</h2>
                <p class="text-gray">En la Clínica del Riñón, nos comprometemos a brindar atención médica de calidad, personalizada y centrada en el paciente. Contamos con un equipo de profesionales capacitados y tecnología avanzada para asegurar tu bienestar renal.</p>
            </div>
        </div>

        <p class="text-lg text-center text-gray mt-8">¡Confía en nosotros para el cuidado de tus riñones!</p>
    </div>
</body>
</html>
