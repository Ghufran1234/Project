@extends('layout.app')

@section('content')
    <h1>Football</h1>

    {!! Form::open(['url' => 'football/add']) !!}
    <div class="form">
        {{Form::label('event name', 'event name')}}
        {{Form::text('event name', '',['class' => 'form-control', 'placeholder' => 'Enter event name'])}}

    </div>
    <div class="form">
{{Form::label('Location', 'Location')}}
{{Form::text('Location', '', ['class' => 'form-control', 'placeholder' => 'Enter location'] )}}
    </div>
    <div class="form">
        {{Form::label('Time', 'Time')}}
        {{Form::text('Time', '', ['class' => 'form-control', 'placeholder' => '...'] )}}

    </div>
<div>
    {{Form::submit('Add', ['class'=> 'btn btn.primary'])}}

</div>

    {!! Form::close() !!}
@endsection


@section('sidebar')

@endsection