@extends('adminlte::page')

@section('title', 'Calendar')

@section('content_header')
    <h1>Calendar</h1>
@stop

@section('content')
<div class="row">
  <div class="col-md-12">
    <div class="card card-primary">
      <div class="card-body p-0">
        <div id="calendar" class="fc fc-media-screen fc-direction-ltr fc-theme-bootstrap">
        </div>
      </div>
    </div>
  </div>
</div>
@stop

@section('css')
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/fullcalendar@5.10.2/main.min.css">
@stop

@section('js')
<script src="//cdn.jsdelivr.net/npm/fullcalendar@5.10.2/main.min.js" ></script>
<script>
$( document ).ready(function() {
    var calendar = new FullCalendar.Calendar($('#calendar')[0], {
      initialView: 'dayGridMonth',
      events: '/events-feed'
    });
    calendar.render();
})
</script>
@stop
In this calendar view, we are using the FullCalendar (Links to an external site.) plugin to render a calendar interface for the front end. And we import the library at the page level.

Please modify your board.blade.php as shown on https://cse4500-laravel9.herokuapp.com/board (Links to an external site.)

 

4. Define a route to feed JSON data
The line marked in red specified the source of the event data. Create a route to feed your calendar with the following JSON data:

  [
    {
      "title": "CSE4500 Class",
      "start": "2022-02-23T17:30:00",
      "end": "2022-02-23T18:45:00"
    },
    {
      "title": "CSE4500 Class",
      "start": "2022-02-28T17:30:00",
      "end": "2022-02-28T18:45:00"
    },   
  ]
