
@extends('layout.app')

@section('content')
    <h1>edit</h1>
    {!! Form::model ($event, array('url' => ['edit/update',$event->id], 'method'=> 'PUT'))!!}

    <div class="form-group">
        {!! Form::label("name", "Your Name") !!}
        {!! Form::text("name", null, ["class" => "form-control"]) !!}
    </div>

    <div class="form-group">
        {!! Form::label("Location", "Location") !!}
        {!! Form::text("Location", null, ["class" => "form-control"]) !!}
    </div>

    <div class="form-group">
        {!! Form::label("Time", "Time") !!}
        {!! Form::text("Time", null, ["class" => "form-control"]) !!}
    </div>
        <div>{{Form::submit("update", ["class"=> "btn btn.primary"])}}

    </div>

    {!! Form::close() !!}
@endsection


