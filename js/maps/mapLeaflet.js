var map = L.map('mapid').fitWorld();
L.tileLayer('http://{s}.tile.osm.org/{z}/{x}/{y}.png').addTo(map);
map.locate({setView: true, maxZoom: 16});

map.on('click', onMapClick);

function onMapClick(e) {
    var lat = e.latlng.lat.toString();
    var lng = e.latlng.lng.toString();
    $('#lat').val(lat);
    $('#lng').val(lng);
}