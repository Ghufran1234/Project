@extends('layout.app')

@section('content')
    <h1>Event</h1>

    <div class="col-lg-6 col-lg-offset-3">
    @if(count($events) >0)

        @foreach($events as $event)
            <ul class="list-group col-lg-8">
                <li class="list-group-item">Name: {{$event->name}}</li>
                <li class="list-group-item">Location: {{$event->Location}}<a href="{{action('EventsController@delete', [$event->id])}}">Delete</a></li>
                <li class="list-group-item">Time: {{$event->Time}} <a href="{{action('EventsController@edit', [$event->id])}}">Edit</a> </li>
            </ul>
        @endforeach
    @endif


    </div>
@endsection


