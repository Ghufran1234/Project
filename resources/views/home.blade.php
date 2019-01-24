@extends('layout.app')

@section('content')

    <h1>With this website you can create you own events!</h1>
<div class="container">
    <div class="row justify-content-left">
        <div class="col-md-8">



                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif



        </div>
    </div>
</div>
@endsection
