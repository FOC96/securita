<html>
    <head>
        <title>Securitas</title>   
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1">
        <meta name="apple-mobile-web-app-capable" content="yes">
        <meta name="apple-mobile-web-app-status-bar-style" content="white">
        <link href="../public/css/style.css" rel="stylesheet" type="text/css">
        <link href="../public/css/sweetalert.css" rel="stylesheet" type="text/css">
        <script type="text/javascript" src="../public/js/magic.js"></script>
        <script type="text/javascript" src="../public/js/sweetalert.min.js"></script>
        <script src='https://api.mapbox.com/mapbox-gl-js/v0.34.0/mapbox-gl.js'></script>
<link href='https://api.mapbox.com/mapbox-gl-js/v0.34.0/mapbox-gl.css' rel='stylesheet' />
   <script src='https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-geocoder/v2.0.1/mapbox-gl-geocoder.js'></script>
<link rel='stylesheet' href='https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-geocoder/v2.0.1/mapbox-gl-geocoder.css' type='text/css' />
    </head>
    <body>   
<!--
            <div id="searchBar">
                <input type="search">
                <button><img src="../public/media/location.svg"></button>
            </div>
-->
            <div id="alertButton" onclick="prueba()"><img src="../public/media/danger.svg"></div>
            <div id="btnEstadistica"><img src="../public/media/stats.svg"></div>
<!--            <div id="btnHistorial"><img src="../public/media/history.svg" onclick="historial()"></div>-->
            <div id='map'></div>
        
    </body>
    
<script>
    function prueba() {
        location.href = 'reporte.php';
    }
    
    function historial() {
        location.href = 'historial.php';
    }
mapboxgl.accessToken = 'pk.eyJ1IjoiZm9jOTk2IiwiYSI6ImNpcmNycnlvbDAxZ2VnOG5reThybmM4cWYifQ.8VEfTTV9TYgsJ5iQnNq24A';
var map = new mapboxgl.Map({
    container: 'map', // container id
    style: 'mapbox://styles/foc996/cisb0j2vn000c2xodyhoghgvs', //stylesheet location
    center: [-100.4435, 20.7044], // starting position
    zoom: 17 // starting zoom
});
    


    var geocoder = new MapboxGeocoder({
    accessToken: mapboxgl.accessToken
});

map.addControl(geocoder);
    
    map.on('load', function () {
        
    map.addSource('single-point', {
        "type": "geojson",
        "data": {
            "type": "FeatureCollection",
            "features": []
        }
    });

    map.addLayer({
        "id": "point",
        "source": "single-point",
        "type": "circle",
        "paint": {
            "circle-radius": 10,
            "circle-color": "#007cbf"
        }
    });
        geocoder.on('result', function(ev) {
        map.getSource('single-point').setData(ev.result.geometry);
    });
        
        

    map.addLayer({
        "id": "mylocation",
        "type": "circle",
        "paint": {
            "circle-radius": 10,
            "circle-color": "#007cbf"
        },
        "source": {
            "type": "geojson",
            "data": {
                "type": "FeatureCollection",
                "features": [{
                    "type": "Feature",
                    "geometry": {
                        "type": "Point",
                        "coordinates": [-100.4435, 20.7044]
                        }
                    }]
            }
        }
        });
        map.addLayer({
        "id": "warnings",
        "type": "circle",
        "paint": {
            "circle-radius": 10,
            "circle-color": "#f4f142"
        },
        "source": {
            "type": "geojson",
            "data": {
                    "type": "FeatureCollection",
                    "features": [{
                    "type": "Feature",
                    "geometry": {
                        "type": "Point",
                        "coordinates": [-100.4433, 20.7044]
                        }
                    }]
                        
                }
            }
    });

        map.addLayer({
        "id": "danger",
        "type": "circle",
        "paint": {
            "circle-radius": 10,
            "circle-color": "#f49841"
        },
        "source": {
            "type": "geojson",
            "data": {
                    "type": "FeatureCollection",
                    "features": [{
                    "type": "Feature",
                    "geometry": {
                        "type": "Point",
                        "coordinates": [-100.4440, 20.7044]
                        }
                    }]
                        
                }
            }
    });
        map.addLayer({
        "id": "critic",
        "type": "circle",
        "paint": {
            "circle-radius": 10,
            "circle-color": "#f44141"
        },
        "source": {
            "type": "geojson",
            "data": {
                    "type": "FeatureCollection",
                    "features": [{
                    "type": "Feature",
                    "geometry": {
                        "type": "Point",
                        "coordinates": [-100.4440, 20.7055]
                        }
                    }]
                        
                }
            }
    });
});

        map.addControl(new mapboxgl.GeolocateControl());
    
    map.addControl(new mapboxgl.NavigationControl());
</script>
</html>