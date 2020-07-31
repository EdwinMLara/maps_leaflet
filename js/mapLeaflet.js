var mymap = L.map('mapid').setView([20.1089155, -101.151713], 11);

L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token={accessToken}', {
    attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, <a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
    maxZoom: 18,
    id: 'mapbox/streets-v11',
    tileSize: 512,
    zoomOffset: -1,
    accessToken: 'apikey'
}).addTo(mymap);

L.geoJson(capa_municipal).addTo(mymap);

function getColor(d) {
    let salida = '';
    switch(parseInt(d)){
        case 1: salida = '#FF3333'; break;
        case 2: salida = '#FF5233'; break;
        case 3: salida = '#FF7433'; break;
        case 4: salida = '#FF9F33'; break;
        case 5: salida = '#FFC133'; break;
        case 6: salida = '#FFE033'; break;
        case 7: salida = '#A2FF33'; break;
        case 8: salida = '#53C12E'; break;
        case 9: salida = '#3A8621'; break;
        case 10: salida = '#A99D39'; break;
        case 11: salida = '#20AC4A'; break;
        case 12: salida = '#20ACA6'; break;
        case 13: salida = '#207BAC'; break;
        case 14: salida = '#2035AC'; break;
        case 15: salida = '#2E84F9'; break;
        case 16: salida = '#80B2F7'; break;
        case 17: salida = '#697B93'; break;
        case 18: salida = '#696D93'; break;
        case 19: salida = '#1B2476'; break;
        case 20: salida = '#2A1B76'; break;
        case 21: salida = '#2D03FF'; break;
        case 22: salida = '#9003FF'; break;
        case 23: salida = '#C393E8'; break;
        case 24: salida = '#DB93E8'; break;
        case 25: salida = '#842C94'; break;
        case 26: salida = '#CB0DB4'; break;
        case 27: salida = '#753664'; break;
        case 28: salida = '#717536'; break;
        case 29: salida = '#B4CAAB'; break;
        case 30: salida = '#5F624C'; break;
        case 31: salida = '#FD0000'; break;
        default:
            salida = '#FFEDA0';
    }
    return salida;
}

function style(feature) {
    return {
        fillColor: getColor(feature.properties.FID),
        weight: 2,
        opacity: 1,
        color: 'white',
        dashArray: '3',
        fillOpacity: 0.7
    };
}

function highlighFeature(e){
    var layer = e.target;

    layer.setStyle({
        weight: 5,
        color: '#666',
        dashArray: '',
        fillOpacity: 0.7
    });

    if (!L.Browser.ie && !L.Browser.opera && !L.Browser.edge) {
        layer.bringToFront();
    }

    info.update(layer.feature.properties);
}


function resetHighLight(e){
    geojson.resetStyle(e.target);
    info.update();
}

function zoomToFeature(e){
    mymap.fitBounds(e.target.getBounds());
}

function onEachFeature(feature,layer){
    layer.on({
        mouseover:highlighFeature,
        mouseout:resetHighLight,
        click:zoomToFeature
    });
}

var geojson;

geojson = L.geoJson(capa_colonias,{style: style, onEachFeature: onEachFeature}).addTo(mymap);

var leyenda_control = L.control({position: 'bottomright'});

leyenda_control.onAdd = function(mymap){
    var div = L.DomUtil.create('div','info legend'),
        colonias = capa_colonias.features.reduce((val, key) => {
            val.push(key.properties.Nombre);
            return val;    
        },[]);

        for (var i = 0; i < colonias.length; i++) {
            div.innerHTML +=
                '<i style="background:' + getColor(i + 1) + '"></i> ' + colonias[i] + '<br>';
        }

        return div;   
};

leyenda_control.addTo(mymap);
var info = L.control();

info.onAdd = function(map){
    this._div = L.DomUtil.create('div','info');
    this.update();
    return this._div;
}

info.update = function(props) {
    this._div.innerHTML = '<h4>Limite Territorial</h4>' + (props ? '<b>' + props.Nombre + '</b><br />' : 'Uriangato');
}

info.addTo(mymap);



