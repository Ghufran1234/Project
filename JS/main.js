$(document).ready(function(){
  if ($("#Five").click(function(){
  getFutyList();


}));


})

$(document).on('pagebeforeshow', '#Detaill', function(){
  let locationID = sessionStorage.getItem("locationID");
  getLocation(locationID);
});

function getFutyList(){

  $.getJSON("JSON/Details.json",function(Details){
    let output = '';
    $.each(Details, function(index, Detail){
      output +=`
      <li>
      <a onClick="locationClicked('${Detail.locationId}')" href="#">
      <h2>${Detail.name}</h2>
      <p>Location:${Detail.location}</p>
      </a>
      </li>
      `;
    });
    $('#Detail').html(output).listview('refresh');
  });
}



function locationClicked(id){
  sessionStorage.setItem("locationID", id);
  $.mobile.changePage("/location");
}

function findObjectByKey(array, key, value) {
    for (var i = 0; i < array.length; i++) {
        if (array[i][key] === parseInt(value)) {
            return array[i];
        }
    }
    return null;
}

function getLocation(locationID){
  $.ajax({
    method: 'GET',
    url:'../JSON/Details.json'}).done(function(response){
      {
        var location = findObjectByKey(response, 'locationId', locationID)
          let locationTop =`
<div style = "text-align:center">
<h1>${location.name}</h1>
<h2>${location.photo}</h2>
</div>

          `;
          $('#locationTop').html(locationTop);

          let LocationDetails = `
          <li><strong>Adress:</strong> ${location.Adress}</li>
          <li><strong>Price:</strong> ${location.Price}</li>
          <li><strong>Number:</strong> ${location.Number}</li>
          <li><strong>Type:</strong> ${location.type}</li>
          `;
          $('#LocationDetails').html(LocationDetails).listview('refresh');
        }

      });
    };
