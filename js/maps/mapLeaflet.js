var map = L.map('mapid').setView([20.14100866524722, -101.17808530226999], 16);

// Capas base
var osmLayer = L.tileLayer('http://{s}.tile.osm.org/{z}/{x}/{y}.png', {
    attribution: '&copy; <a href="http://osm.org/copyright">OpenStreetMap<\/a> contributors'
}).addTo(map);

var popup = L.popup();
function onMapClick(e) {
popup
.setLatLng(e.latlng) // Sets the geographical point where the popup will open.
//.setContent("Has hecho click en la coordenada:" + e.latlng.lat.toString() + "," + e.latlng.lng.toString()) // Sets the HTML content of the popup.
//.openOn(map); // Adds the popup to the map and closes the previous one.
var lat = e.latlng.lat.toString();
var lng = e.latlng.lng.toString();
$('#lat').val(lat);
$('#lng').val(lng);
//var marker = L.marker([lat, lng]).addTo(map);
}

    map.on('click', onMapClick);