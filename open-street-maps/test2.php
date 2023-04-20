<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title></title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" />
    <style>
        #map {
            height: 500px;
        }
        #res_div {
            cursor: pointer;
        }
        li:hover,
        li:hover div {
            background-color: #ccc;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row mt-5">
            <div class="col">
                <input type="text" autocomplete="off" class="form-control" id="origen" placeholder="Origen" oninput="buscar_direccion(this.value,'origen')" />
            </div>
            <div class="col">
                <input type="text" autocomplete="off" class="form-control" id="destino" placeholder="Destino" oninput="buscar_direccion(this.value,'destino')" />
            </div>
        </div>
        <div class="row mt-5">
            <div id="res_div"></div>
        </div>
        <div class="row mt-5">
            <div id="map"></div>
        </div>
        <div class="row mt-5">
            <div class="col">
                <button id="btn_ruta" class="btn btn-primary">Calcular</button>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.4.js" integrity="sha256-a9jBBRygX1Bh5lt8GZjXDzyOB+bWve9EiO7tROUtj/E=" crossorigin="anonymous"></script>
    <!-- Bootstrap Bundle with Popper JS and Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"></script>
    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"></script>
    <script type="text/javascript" src="https://rawgit.com/jieter/Leaflet.encoded/master/Polyline.encoded.js"></script>
    <script>
        var greenIcon = L.icon({
            iconUrl: 'https://cdn.rawgit.com/pointhi/leaflet-color-markers/master/img/marker-icon-2x-green.png',
            shadowUrl: 'https://cdnjs.cloudflare.com/ajax/libs/leaflet/0.7.7/images/marker-shadow.png',
            iconSize: [25, 41],
            iconAnchor: [12, 41],
            popupAnchor: [1, -34],
            shadowSize: [41, 41]
        });
        var redIcon = L.icon({
            iconUrl: 'https://cdn.rawgit.com/pointhi/leaflet-color-markers/master/img/marker-icon-2x-red.png',
            shadowUrl: 'https://cdnjs.cloudflare.com/ajax/libs/leaflet/0.7.7/images/marker-shadow.png',
            iconSize: [25, 41],
            iconAnchor: [12, 41],
            popupAnchor: [1, -34],
            shadowSize: [41, 41]
        });
        $('body').on('click', '.resultado_origen', function() {
            var lat_origen = $(this).attr('data-lat')
            var lng_origen = $(this).attr('data-lng')
            $("#origen").val($(this).text())
            $("#res_div").html('')
            var hay_marker = 0
            map.eachLayer(function(layer) {
                if (layer instanceof L.Marker) {
                    if (layer.options.name === "marker origen") {
                        var newLatLng = L.latLng(lng_origen, lat_origen);
                        layer.setLatLng(newLatLng);
                        // marker_origen.setLatLng(newLatLng);
                        hay_marker = hay_marker + 1
                    }
                }
            });
            if (hay_marker === 0) {
                var marker_origen = L.marker([lng_origen, lat_origen], {
                    draggable: 'true',
                    name: 'marker origen',
                    icon: greenIcon
                }).addTo(map);
                marker_origen.on('dragend', function(event) {
                    var marker_origen = event.target;
                    var position = marker_origen.getLatLng();
                    buscar_direccion_reversa(position.lat, position.lng, 'origen')
                    marker_origen.setLatLng(new L.LatLng(position.lat, position.lng), {
                        draggable: 'true'
                    });
                    map.panTo(new L.LatLng(position.lat, position.lng))
                });
                var zoom = 13;
                map.setView([lng_origen, lat_origen], zoom);
            }
        })
        $('body').on('click', '.resultado_destino', function() {
            var lat_destino = $(this).attr('data-lat')
            var lng_destino = $(this).attr('data-lng')
            $("#destino").val($(this).text())
            $("#res_div").html('')
            var hay_marker = 0
            map.eachLayer(function(layer) {
                if (layer instanceof L.Marker) {
                    if (layer.options.name === "marker destino") {
                        var newLatLng = L.latLng(lng_destino, lat_destino);
                        layer.setLatLng(newLatLng);
                        // marker_origen.setLatLng(newLatLng);
                        hay_marker = hay_marker + 1
                    }
                }
            });
            if (hay_marker === 0) {
                var marker_destino = L.marker([lng_destino, lat_destino], {
                    draggable: 'true',
                    name: 'marker destino',
                    icon: redIcon
                }).addTo(map);
                marker_destino.on('dragend', function(event) {
                    var marker_destino = event.target;
                    var position = marker_destino.getLatLng();
                    buscar_direccion_reversa(position.lat, position.lng, 'destino')
                    marker_destino.setLatLng(new L.LatLng(position.lat, position.lng), {
                        draggable: 'true'
                    });
                    map.panTo(new L.LatLng(position.lat, position.lng))
                });
                var zoom = 13;
                map.setView([lng_destino, lat_destino], zoom);
            }
        })
        function buscar_direccion_reversa(lat, lng, tipo) {
            borro_ruta()
            const api = 'https://nominatim.openstreetmap.org/reverse?lat=' + lat + '&lon=' + lng + '&format=json';
            $.ajax({
                    url: api,
                    method: 'GET',
                })
                .done(function(data) {
                    $("#" + tipo).val(data.display_name)
                })
                .fail(function(xhr) {
                    console.error(xhr);
                });
        }
        function buscar_direccion(inputValue, tipo) {
            if (inputValue.length >= 3) {
                const direccion = encodeURI(inputValue)
                const api = `https://nominatim.openstreetmap.org/search?format=geojson&limit=5&street=${direccion}`;
                $.ajax({
                        url: api,
                        method: 'GET',
                    })
                    .done(function(data) {
                        $("#res_div").html('')
                        data.features.forEach((element) => {
                            $("#res_div").append('<li class="resultado_' + tipo + '" data-lat="' + element.geometry.coordinates[0] + '" data-lng="' + element.geometry.coordinates[1] + '"><p>' + element.properties.display_name + '</p></li>');
                        });
                    })
                    .fail(function(xhr) {
                        console.error(xhr);
                    });
            }
        }
        const zoom = 3;
        const lat = 52.22977;
        const lng = 21.01178;
        // calling map
        const map = L.map("map").setView([lat, lng], zoom);
        // Used to load and display tile layers on the map
        L.tileLayer("https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png", {
            attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors',
        }).addTo(map);
        function borro_ruta() {
            map.eachLayer(function(layer) {
                if (layer instanceof L.Polyline) {
                    console.log('si')
                    map.removeLayer(layer);
                }
            });
        }
        $("#btn_ruta").on('click', function() {
            borro_ruta()
            traer_ruta()
        })
        function traer_ruta() {
            var coordenadas = []
            map.eachLayer(function(layer) {
                if (layer instanceof L.Marker) {
                    var objeto = layer.getLatLng()
                    var lat = objeto.lat
                    var lng = objeto.lng
                    coordenadas.push([lng, lat])
                }
            });
            fetch('https://api.openrouteservice.org/v2/directions/driving-car', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json; charset=utf-8',
                        'Accept': 'application/json, application/geo+json, application/gpx+xml, img/png; charset=utf-8',
                        'Authorization': '5b3ce3597851110001cf6248e5487bc1a0c8407cbefaa6fdd3dca833'
                    },
                    body: JSON.stringify({
                        coordinates: coordenadas,
                        radiuses: [50000, 50000],
                        units: 'mi'
                    })
                })
                .then(response => {
                    if (!response.ok) {
                        throw new Error('Network response was not ok');
                    }
                    return response.json();
                })
                .then(data => {
                    console.log(data.bbox)
                    var encodedRoutes = [data.routes[0].geometry]
                    localStorage.setItem('coordenadas', data.routes[0].geometry);
                    for (let encoded of encodedRoutes) {
                        var coordinates = L.Polyline.fromEncoded(encoded).getLatLngs();
                        L.polyline(
                            coordinates, {
                                color: 'red',
                                weight: 4,
                                opacity: .7,
                                lineJoin: 'round',
                                id: 'ruta'
                            }
                        ).addTo(map);
                        var sfBounds = L.latLngBounds([
                            [data.bbox[1], data.bbox[0]],
                            [data.bbox[3], data.bbox[2]]
                        ]);
                        map.fitBounds(sfBounds);
                    }
                })
                .catch(error => {
                    console.error('Error:', error);
                });
        }
    </script>
</body>
</html>












