@extends('layout.app')
        <!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css" />
    <script
            src="https://code.jquery.com/jquery-1.11.1.js"
            integrity="sha256-MCmDSoIMecFUw3f1LicZ/D/yonYAoHrgiep/3pCH9rw="
            crossorigin="anonymous"></script>
    <script src="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>

</head>
<body>

<header data-role="header" data-theme="a">

    <h1>Futy Sorter</h1>
</header>


<h3>Search</h3>

<div class="container">

    <form action="/search" method="POST" role="search">
        {{ csrf_field() }}
        <div class="form">
            <input type="text" class="form-control" name="q"
                   placeholder="Search Events">
            <div>
                {{Form::submit('Search', ['class'=> 'btn btn.primary'])}}
            </div>
        </div>
    </form>
    @if(isset($details))
<p>The search results for <b> {{$query}}</b> are:</p>
@foreach($details as $event)
        <ul class="list-group col-lg-8">
            <li class="list-group-item">Name: {{$event->name}}</li>
            <li class="list-group-item">Location: {{$event->Location}}</li>
            <li class="list-group-item">Time: {{$event->Time}} </li>
        </ul>
@endforeach

        @elseif(isset($message))
        <p>{{$message}}</p>

        @endif

</div>

<div data-role="panel" id="PanelA" data-display="overlay" data-position="left">
    <a href="/football"  class="ui-btn" data-rel="close" >Create an Event</a>
    <a href="/events"  class="ui-btn" data-rel="close" >Current events</a>
    <a href="/search"  class="ui-btn" data-rel="close" >Search events</a>
    <a href="/login"  class="ui-btn" data-rel="close" >Login</a>
    <a href="/register"  class="ui-btn" data-rel="close" >Register</a>
</div>
<footer data-role="footer" data-position="fixed">
    <nav data-role="navbar">
        <div id="mySidenav" class="sidenav">
            <a href="#PanelA" class="ui-btn-center" data-icon="plus">Choose Option</a>
        </div>
    </nav>
</body>
</html>