@extends('adminlte::page')

@section('template_title')
    Cita
@endsection

@section('content')
<html lang='en'>
  <head>
    <meta charset='utf-8' />
 <!-- Incluye el core de FullCalendar -->
 <script src='https://cdn.jsdelivr.net/npm/fullcalendar@6.1.10/index.global.min.js'></script>
    <!-- Incluye los plugins adicionales -->
    <script src='https://cdn.jsdelivr.net/npm/fullcalendar@6.1.10/plugins/daygrid/main.min.js'></script>
    <script src='https://cdn.jsdelivr.net/npm/fullcalendar@6.1.10/plugins/timegrid/main.min.js'></script>
    <script src='https://cdn.jsdelivr.net/npm/fullcalendar@6.1.10/plugins/list/main.min.js'></script>
    
    <script>
      document.addEventListener('DOMContentLoaded', function() {
        var calendarEl = document.getElementById('calendar');
        var calendar = new FullCalendar.Calendar(calendarEl, {

          initialView: 'dayGridMonth',
          events: [
            @foreach($consulta as $registro)
            {
                title: '{{ $registro['nombre_paciente'] }} - Dr. {{ $registro['nombre_doctor'] }}', // Ajusta según la estructura de tus modelos
                start: '{{ $registro['Fecha'] }}',
                 // Puedes ajustar esto según la estructura de tu modelo
              },
            @endforeach
          ]
          
        });
        calendar.render();
      });
    </script>
  </head>
  <body>
    <div id='calendar'></div>
  </body>
</html>

@endsection