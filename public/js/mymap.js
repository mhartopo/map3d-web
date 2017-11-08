function initMap() {
  var myLatlng = new google.maps.LatLng(-6.909579,107.606419);
  var mapOptions = {
    zoom: 4,
    center: myLatlng
  }
  var map = new google.maps.Map(document.getElementById("map"), mapOptions);

  // Place a draggable marker on the map
  var marker = new google.maps.Marker({
      position: myLatlng,
      map: map,
      draggable:true,
      title:"Drag me!"
  });
  
  google.maps.event.addListener(marker, 'dragend', function (evt) {
      document.getElementById("latInput").value = evt.latLng.lat().toFixed(3);
      document.getElementById("lngInput").value = evt.latLng.lng().toFixed(3);
  });
}