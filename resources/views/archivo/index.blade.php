<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Mi Vista</title>
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

        .wrapper {
            display: flex;
            align-items: stretch;
            height: 100vh;
        }

        #sidebar {
            min-width: 250px;
            max-width: 250px;
            background: #343a40;
            color: #fff;
            transition: all 0.3s;
        }

        #sidebar.active {
            width: 80px;
        }

        #sidebar ul.components {
            padding: 16px;
        }

        #sidebar ul li a {
            padding: 10px;
            font-size: 1.2em;
            display: block;
            color: #fff;
        }

        #sidebar ul li a:hover {
            color: #3498db;
            background: #fff;
        }

        #content {
            width: 100%;
            padding: 16px;
        }

        .navbar {
            background: #343a40;
            padding: 16px;
            color: #fff;
        }

        .navbar a {
            color: #fff;
            text-decoration: none;
        }

        .navbar a:hover {
            color: #3498db;
        }
    </style>
</head>
<body>
    <div class="wrapper">
        <!-- Sidebar -->
        <nav id="sidebar">
            <ul class="list-unstyled components">
                <li class="active">
                    <a href="/">
                        <i></i> Home
                    </a>
                </li>
                
            </ul>
        </nav>

        <!-- Page Content -->
        <div id="content">
            <nav class="navbar">
                <div class="container-fluid">
                    <button type="button" id="sidebarCollapse">
                        <i></i>
                    </button>
                </div>
            </nav>

            <div class="mt-2">
                <h1 class="text-xl mb-2 font-semibold">
                    Agregar Datos
                </h1>
                <div class="p-4 mb-4 bg-white border border-gray-200 rounded-lg shadow-md">
                    <h1 class="text-xl mb-2 font-semibold">
                        Subir por Imagen
                    </h1>
                    <div class="items-center justify-between pb-4">
                        <div class="flex items-center space-x-2">
                            <form method="POST" action="{{ route('imageOCR') }}" enctype="multipart/form-data">
                                @csrf
                                <div style="display: flex; align-items: center;">
                                    <input type="file" name="file" accept="image/*">
                                    <button  type="submit">
                                        Subir
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            @if(session('success'))
                <div>
                    {{ session('success') }}
                </div>
            @endif

            <div class="mt-2">
                <h1 class="text-xl mb-2 font-semibold">
                    Resultados OCR
                </h1>

                <!-- ... (código anterior de tu vista) -->

                <div>
                    <h2 class="text-lg font-semibold mb-2">Resultados adicionales:</h2>
                    @if(isset($result))
                        <ul>
                            @foreach($result as $name => $price)
                                <li>{{ $name }} - Precio: {{ $price }}</li>
                            @endforeach
                        </ul>
                    @else
                        <p>No hay resultados adicionales disponibles.</p>
                    @endif
                </div>
                 <!-- Mostrar el costo total -->
             @if(isset($totalCost))
            <p>Costo Total: ${{ $totalCost }}</p>
        @endif
            </div>
        </div>
    </div>

    <script>
        // Agrega el script necesario para controlar el colapso del sidebar
        document.getElementById('sidebarCollapse').addEventListener('click', function() {
            var sidebar = document.getElementById('sidebar');
            sidebar.classList.toggle('active');
        });
    </script>
</body>
</html>

