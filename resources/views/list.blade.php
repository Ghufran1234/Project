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
    <title>Map</title>

    <style>
        #map{
            height:200px;
            width:100%
        }
    </style>
</head>
<body>
<div id="main">
    <header data-role="header" data-theme="a">
        <h1>Map</h1>
    </header>

    <footer data-role="footer" data-position="fixed">
        <nav data-role="navbar">
            <div id="mySidenav" class="sidenav">
                <a href="index.html" data-icon="minus">Back</a>
            </div>
        </nav>

</div>
</footer>
<article data-role="content">
    <h1>Your Fotball Locations:</h1>
    <p>Below you can find the locations of Yorkshires Fotball pitches!</p>
    <div id="map"></div>

    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDuh3ICjZ7VTnao6smfBjlkVDwvrdHqA90&callback=initMap"></script>
    <script {{ asset('../../JS/map.js') }}></script>




</body>
</html>
