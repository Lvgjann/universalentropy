<? require_once('../../../inc/common.php'); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="FR">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Bases</title>
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.6.0/dist/leaflet.css"/>
    <script src="https://unpkg.com/leaflet@1.6.0/dist/leaflet.js" type="application/javascript"></script>
    <!-- <script src="js/plotly-latest.min.js"></script> -->
    <link href="../../css/gen.css" rel="stylesheet" type="text/css" media="all"/>
    <link href="../../css/stardust.css" rel="stylesheet" type="text/css" media="all"/>
    <link href="../../css/fontawesome.css" rel="stylesheet" type="text/css" media="all"/>
</head>
<body>

<?php set_menu(2); ?>

<!-- Content -->
<div id="page">
    <div id="page_content">
        <div class="title">
            <h2>Les bonnes adresses</h2>
            <span class="byline">Sous-titre</span></div>
        <p class="general">
            // TODO : Insérer carte dynamique.
        </p>
        <div id="mapid" style="width: 600px; height: 400px;"></div>

    </div>
    <?php set_ratus_sidebar(1); ?>
</div>

<!-- Portfolio -->
<?php set_portfolio(2); ?>

<!-- Footer -->
<?php echo TXT_FOOTER;?>

<!-- Copyright -->
<?php echo TXT_COPYRIGHT;?>
</body>

<script type="application/javascript">
    let mymap = L.map('mapid').setView([51.505, -0.09], 13);
    L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token={accessToken}', {
        attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, ' +
            '<a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, ' +
            'Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
        maxZoom: 18,
        id: 'mapbox/streets-v11',
        tileSize: 512,
        zoomOffset: -1,
        accessToken: 'pk.eyJ1IjoibHZnamFubiIsImEiOiJja2FxdDdtaDUwM2F0MnBucWtkdDEyajU1In0.dvsRgH77rfU3IXtWfTyqrw'
    }).addTo(mymap);
    // Geometry stuff, like markers and polygons
    let marker = L.marker([51.5, -0.09]).addTo(mymap);
    let circle = L.circle([51.5, -0.11], {
        color: 'red',
        fillColor: '#f03',
        fillOpacity: 0.5,
        radius: 500
    }).addTo(mymap);
    let polygon = L.polygon([
        [51.509, -0.08],
        [51.503, -0.06],
        [51.51, -0.047]
    ]).addTo(mymap);
    marker.bindPopup("I am a popup.").openPopup();
    circle.bindPopup("I am a circle.");
    polygon.bindPopup("I am polygon.");
    let popup = L.popup();

    // var popup = L.popup().setLatLng([51.5, -0.09]).setContent("I am a standalone popup.").openOn(mymap);
    function onMapClick(e) {
        popup.setLatLng(e.latlng).setContent("You clicket the map at " + e.latlng.toString()).openOn(mymap);
    }

    mymap.on('click', onMapClick)
</script>
<script type="application/javascript" target="_parent" src="../../js/general_script.js"></script>
</html>
