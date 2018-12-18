
<DOCTYPE html>
<html>
<head>
    <meta charset="uft-8">

    <title>Futy</title>
<link rel="stylesheet" href="/css/app.css">

</head>

<body>

@include('incl.navbar')

<div class="container">

<div class="row">
    <div class = "col-md-8 col-lg-8">
        @yield('content')
    </div>
    <div class = "col-md-4 col-lg-4">
        @include('Incl.sidebar')
    </div>
</div>
</div>




</body>




</html>

</DOCTYPE>