@extends('layout.app')


@section('content')


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

@endsection