var map = L.map('map').setView([37.88437176085360, -4.779524803161621], 14);

// Capas base
var osmLayer = L.tileLayer('http://{s}.tile.osm.org/{z}/{x}/{y}.png', {
    attribution: '&copy; <a href="http://osm.org/copyright">OpenStreetMap<\/a> contributors'
}).addTo(map);


var popup = L.popup();

function onMapClick(e) {
    popup
        .setLatLng(e.latlng) // Sets the geographical point where the popup will open.
        .setContent("Has hecho click en la coordenada:<br> " +  e.latlng.lat.toString() + "," +  e.latlng.lng.toString()) // Sets the HTML content of the popup.
        .openOn(map); // Adds the popup to the map and closes the previous one. 
}

map.on('click', onMapClick);