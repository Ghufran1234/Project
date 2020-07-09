
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


    <title></title>
</head>
<body>
<div data-role="page" id="Detaille">
    <header data-role="header" data-theme="a">
        <h1>Yorkshire Football</h1>
        <a href="index.html" class="ui-btn">Back</a>
    </header>
    <article data-role="content">
        <div id="main">
            <ul id="nav"></ul>

            <div id="locationeTop"></div>
            <br><br>
            <ul id="LocationeDetails" data-role="listview">
                <footer data-role="footer" data-position="fixed">
                    <nav data-role="navbar">
                        <div id="mySidenav" class="sidenav">
                            <a href="index.html" data-icon="home">Home</a>
                            <a href="list.html">List</a>
                            <a href="Map.html" data-icon="map">Map</a>
                        </div>
                    </nav>
                    <script {{ asset('../../JS/eleven.js') }}></script>
