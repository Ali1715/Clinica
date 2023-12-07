@extends('adminlte::page')
@section('content')
@vite(['resources/sass/app.scss', 'resources/js/app.js','resources/css/.*','resources/css/home.css',  'resources/calendar/fullcalendar/packages/core/main.css',
                'resources/calendar/fullcalendar/packages/daygrid/main.css',
                '/node_modules/@fullcalendar/**', 'resources/calendar/css/bootstrap.min.css',
                'resources/calendar/css/style.css',])
                <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">

<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500&display=swap" rel="stylesheet">



    <div class="div-content-wrapper">
      <div class="heading-dashboard">Dashboard</div>
      <div class="ordered-list-item">Home</div>
      <div class="text-wrapper">/</div>
      <div class="div">Dashboard v1</div>
      <div class="section">
        <div class="heading">150</div>
        <div class="text-wrapper-2">New Orders</div>
        <img class="icon" src="img/image.svg" />
        <div class="link">
          <div class="overlap-group">
            <div class="text-wrapper-3">More info</div>
            <div class="symbol"></div>
          </div>
        </div>
      </div>
      <div class="section-2">
        <div class="overlap">
          <div class="heading-2">53</div>
          <div class="heading-3">%</div>
        </div>
        <div class="text-wrapper-4">Bounce Rate</div>
        <img class="img" src="img/icon-2.svg" />
        <div class="link">
          <div class="overlap-group">
            <div class="text-wrapper-3">More info</div>
            <div class="symbol"></div>
          </div>
        </div>
      </div>
      <div class="section-3">
        <div class="heading-4">44</div>
        <div class="text-wrapper-5">User Registrations</div>
        <img class="icon" src="img/icon.svg" />
        <div class="link">
          <div class="overlap-group">
            <div class="text-wrapper-6">More info</div>
            <div class="symbol-2"></div>
          </div>
        </div>
      </div>
      <div class="section-4">
        <div class="heading-5">65</div>
        <div class="text-wrapper-7">Unique Visitors</div>
        <img class="icon" src="img/icon-3.svg" />
        <div class="link">
          <div class="overlap-group">
            <div class="text-wrapper-3">More info</div>
            <div class="symbol"></div>
          </div>
        </div>
      </div>
    
<div class="container" style="width: 70px; height:50px; top: 40px; left: 50px;">Calendar
    <div id='calendar'></div>
</div>
      </div>



    

    <script>
      import FullCalendar from 'fullcalendar'; 
      document.addEventListener('DOMContentLoaded', function() {
    var calendarEl = document.getElementById('calendar');

    var calendar = new FullCalendar.Calendar(calendarEl, {
      plugins: [ 'interaction', 'dayGrid', 'timeGrid', 'list' ],
      height: 'parent',
      header: {
        left: 'prev,next today',
        center: 'title',
        right: 'dayGridMonth,timeGridWeek,timeGridDay,listWeek'
      },
      defaultView: 'dayGridMonth',
      defaultDate: '2020-02-12',
      navLinks: true, // can click day/week names to navigate views
      editable: true,
      eventLimit: true, // allow "more" link when too many events
      events: [
        {
          title: 'All Day Event',
          start: '2020-02-01',
        },
        {
          title: 'Long Event',
          start: '2020-02-07',
          end: '2020-02-10'
        },
        {
          groupId: 999,
          title: 'Repeating Event',
          start: '2020-02-09T16:00:00'
        },
        {
          groupId: 999,
          title: 'Repeating Event',
          start: '2020-02-16T16:00:00'
        },
        {
          title: 'Conference',
          start: '2020-02-11',
          end: '2020-02-13'
        },
        {
          title: 'Meeting',
          start: '2020-02-12T10:30:00',
          end: '2020-02-12T12:30:00'
        },
        {
          title: 'Lunch',
          start: '2020-02-12T12:00:00'
        },
        {
          title: 'Meeting',
          start: '2020-02-12T14:30:00'
        },
        {
          title: 'Happy Hour',
          start: '2020-02-12T17:30:00'
        },
        {
          title: 'Dinner',
          start: '2020-02-12T20:00:00'
        },
        {
          title: 'Birthday Party',
          start: '2020-02-13T07:00:00'
        },
        {
          title: 'Click for Google',
          url: 'http://google.com/',
          start: '2020-02-28'
        }
      ]
    });

    calendar.render();
  });

    </script>

  

@endsection