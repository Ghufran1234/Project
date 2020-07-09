window.onload = () => {
    init();
};



function initMap(){
  var options = {
    zoom:9,
    center: {lat:53.6458, lng:-1.7850}
  }



  var map = new
  google.maps.Map(document.getElementById('map'), options);


  var markers = [
    {coords:{lat:53.6448, lng:-1.7323},
    content:'<p>Soccer City</p>'},
    {coords:{lat:53.6897, lng:-1.6270},
    content:'<p>Dewsbury Sports Centre</p>'},
    {coords:{lat:53.7044, lng:-1.6420},
    content:'<p>Al Hikma</p>'},
    {coords:{lat:53.6868, lng:-1.6291},
    content:'<p>Kick Off</p>'},
    {coords:{lat:53.6942, lng:-1.6442},
    content:'<p>St Jhon Fishers</p>'},
    {coords:{lat:53.7081, lng:-1.6331},
    content:'<p>Street Soccer</p>'}

  ];
  for(var i = 0;i < markers.length;i++){
    addMarker(markers[i]);
  }

  function addMarker(prop){

    var marker = new google.maps.Marker({
      position:prop.coords,
      map:map
    });

    if(prop.content){
      var infoWindow = new google.maps.InfoWindow({
        content:prop.content
      });

      marker.addListener('click', function(){
        infoWindow.open(map, marker);
      });
    }

  }
}
