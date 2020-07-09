
$(document).ready(function(){
  if ($("#Eleven").click(function(){
  getelevenFutyList();
}));



})
$(document).on('pagebeforeshow', '#Detaille', function(){
  let locationeID = sessionStorage.getItem("locationeID");
  geteLocation(locationeID);
});
function getelevenFutyList(){

  $.getJSON("JSON/Detailseleven.json",function(Detailseleven){
    let output = '';
    $.each(Detailseleven, function(index, Detaileleven){
      output +=`
      <li>
      <a  onClick="locationeClicked('${Detaileleven.locationeId}')" href="#">
      <h2>${Detaileleven.name}</h2>
      <p>Location:${Detaileleven.location}</p>
      </a>
      </li>
      `;
    });
    $('#Detail').html(output).listview('refresh');
  });
}


function locationeClicked(Id){
  sessionStorage.setItem("locationeID", Id);
  $.mobile.changePage("/locatione");
}


function findeObjectByKey(array, key, value) {
    for (var e = 0; e < array.length; e++) {
        if (array[e][key] === parseInt(value)) {
            return array[e];
        }
    }
    return null;
}

function geteLocation(locationeID){
  $.ajax({
    method: 'GET',
    url:'JSON/Detailseleven.json'}).done(function(response){
      {
        var locatione = findeObjectByKey(response, 'locationeId', locationeID)
          let locationeTop =`
<div style = "text-align:center">
<h1>${locatione.name}</h1>
<h2>${locatione.photo}</h2>
</div>

          `;
          $('#locationeTop').html(locationeTop);

          let LocationeDetails = `
          <li><strong>Adress:</strong> ${locatione.Adress}</li>
          <li><strong>Price:</strong> ${locatione.Price}</li>
          <li><strong>Number:</strong> ${locatione.Number}</li>
          <li><strong>Type:</strong> ${locatione.type}</li>
          `;
          $('#LocationeDetails').html(LocationeDetails).listview('refresh');
        }

      });
    };
