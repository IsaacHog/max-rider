export async function displayRoute(startMarker, endMarker) {
    const coordinates = [
        [startMarker.getLatLng().lng, startMarker.getLatLng().lat],
        [endMarker.getLatLng().lng, endMarker.getLatLng().lat]
    ];

    try {
        const response = await fetch('https://api.openrouteservice.org/v2/directions/driving-car', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json; charset=utf-8',
                'Accept': 'application/json, application/geo+json, application/gpx+xml, img/png; charset=utf-8',
                'Authorization': '5b3ce3597851110001cf6248e5487bc1a0c8407cbefaa6fdd3dca833'
            },
            body: JSON.stringify({
                coordinates: coordinates,
                units: 'km'
            })
        });

        if (!response.ok) {
            throw new Error('Route not ok');
        }

        const data = await response.json();
        const encodedRoutes = [data.routes[0].geometry];

        for (const encoded of encodedRoutes) {
            const coordinates = L.Polyline.fromEncoded(encoded).getLatLngs();
            L.polyline(coordinates, {
                color: 'red',
                weight: 4,
                opacity: .7,
                lineJoin: 'round',
                id: 'route'
            }).addTo(map);

            const sfBounds = L.latLngBounds([
                [data.bbox[1], data.bbox[0]],
                [data.bbox[3], data.bbox[2]]
            ]);
            map.fitBounds(sfBounds);

            drawRouteInfo(data)
        }
    } catch (error) {
        console.error(error);
    }
}

function drawRouteInfo(data) {
    console.log(data)
    document.getElementById('route-distance-car').textContent = `:  ${data.routes[0].segments[0].distance.toFixed(2)} km`;
    document.getElementById('route-duration-car').textContent = `:  ${formatDuration(data.routes[0].segments[0].duration)}`;
}

function formatDuration(duration) {
    let durationText;

    if (duration < 3600) {
        // Display minutes only
        const minutes = Math.round(duration / 60);
        durationText = `${minutes}min`;
    } else {
        // Display hours and minutes
        const hours = Math.floor(duration / 3600);
        const minutes = Math.round((duration % 3600) / 60);
        durationText = `${hours}h ${minutes}min`;
    }

    return durationText;
}