// Leaflet initialisation
let map = L.map('mapid', {
    center: [44.82, -0.50],
    zoom: 14,
    minZoom: 2,
    maxZoom: 18
});

/*
 * Creating map background.
 * The first map in OpenLayer, the second one is OpenStreetMap.
 * There must not be both maps uncommented.
 */
L.tileLayer('https://mt1.google.com/vt/lyrs=y&x={x}&y={y}&z={z}', {
    attribution: 'OpenLayer QGIS'
}).addTo(map);
/*
L.tileLayer('https://api.maptiler.com/maps/streets/{z}/{x}/{y}.png?key=zPrGtDmbg21l0RCGVLQk', {
    attribution: '© OpenStreetMap contributors'
}).addTo(map);
*/

/*
 * Binds a popup to a building, whether it is in Floirac or Bouliac (the structure is the same).
 */
function basementBatiment(feature, layer) {
    layer.bindPopup(
        "<h3> BATIMENT </h3>" +
        "<p>Type : " + (feature.properties.type === 'yes' ? 'Undefined' : feature.properties.type) + "</p>"
    );
}

/*
 * Binds a popup to a client, indicating PRM ID, consumption and update date.
 */
function basementClients(feature, layer) {
    layer.bindPopup(
        "<h3> CLIENT </h3>" +
        "<p>ID Référence : " + feature.properties.REFERE +
        "<br/> Consommation : " + (feature.properties.CONSOMMATI + feature.properties.CONSOMMA1) +
        "<br/> Mis à jour le " + feature.properties.MIS_A_JOUR +
        "</p>"
    );
}

/*
 * Generates plot correpsonding to a clicked client.
 * If the client PRM is in the consumption map, it will display the plot. If not, the plot will be empty.
 */
function createGraph(prop) {
    let prm = prop["target"]["_map"]["_popup"]["_content"].split(' : ')[1].split('<br/> Consommation')[0];
    json_clients84.getFeaturesByProperty = function (key, value) {
        return this.features.filter(function (feature) {
            return feature.properties[key] === value;
        });
    };
    // let feats = json_clients84.getFeaturesByProperty("REFERE", prm)[0]; // not used yet.
    let cons = consumption.get(parseInt(prm));
    let trace1 = {
        x: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
        y: (cons !== undefined ? consumption.get(parseInt(prm)) : [0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0]),
        type: 'bar',
        marker: { color: 'red' }
    };
    let data = [trace1];
    let layout = {
        title: 'Consommation au mois',
        font: { family: 'Raleway, sans-serif' },
        showlegend: false,
        xaxis: { tickangle: -45 },
        yaxis: {
            zeroline: false,
            gridwidth: 2
        },
        bargap: 0.2
    };
    Plotly.newPlot("myDiv", data, layout);
}

/*
 * Sets color background to Leaflet entities.
 */
function polystyle(color) {
    return {
        fillColor: color,
        weight: 1,
        opacity: 0.5,
        fillOpacity: 0.5
    }
}

/*
 * Creates icon for client entities
 */
function createCustomIcon(feature, latlng) {
    let myIcon = new L.Icon({
        iconUrl: 'img/clients84.png',
        iconSize: [9, 9], // width and height of the image in pixels
        //shadowSize: [16, 16], // width, height of optional shadow image
        iconAnchor: [9, 9], // point of the icon which will correspond to marker's location
        shadowAnchor: [12, 6],  // anchor point of the shadow. should be offset
        popupAnchor: [0, 0] // point from which the popup should open relative to the iconAnchor
    });
    return L.marker(latlng, {icon: myIcon})
}

// onEachFeature triggers once when the map generates. In this case, it generates and binds popups to each entity.
L.geoJson(json_bouliac84, {onEachFeature: basementBatiment, style: polystyle('blue')}).addTo(map);
L.geoJson(json_floirac84, {onEachFeature: basementBatiment, style: polystyle('green')}).addTo(map);
// .on() binds a function to an event on a client.
L.geoJson(json_clients84, {
    onEachFeature: basementClients,
    pointToLayer: createCustomIcon
}).on('click', createGraph).addTo(map);