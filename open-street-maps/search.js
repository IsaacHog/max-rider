import { debounce } from './debounce.js';

async function search(query, positionType) {
    console.log("searching...");
    if (query.length < 3 || query.length === 0) {
        $("#search-results").html(`
            <div class="card">
                <div class="card-header">Address:</div>
                <div class="card-body">
                    <p>No results</p>
                </div>
            </div>
        `);
        return;
    }

    const searchUrl = `https://nominatim.openstreetmap.org/search?format=geojson&limit=5&street=${encodeURIComponent(query)}`;
    try {
        const response = await fetch(searchUrl, { headers: { 'User-Agent': 'My Application' } });
        const data = await response.json();
        const addressHtml = data.features.map((element) => `
            <a href="#" class="list-group-item list-group-item-action search-result" data-lat='${element.geometry.coordinates[1]}' data-long='${element.geometry.coordinates[0]}' data-position-type='${positionType}'>
                ${element.properties.display_name}
            </a> `).join("");

        $("#search-results").html(`
            <div class="card">
                <div class="card-header">Address:</div>
                <div class="list-group list-group-flush">${addressHtml}</div>
            </div> `);

        attachClickHandler();
    } catch (error) {
        console.error(error);
    }
}

const debouncedSearch = debounce(search, 500);
document.querySelectorAll('.search-input').forEach(function (input) {
    input.addEventListener('input', function () {
        const query = input.value;
        const positionType = input.id.split('-')[1]; // Assumes input IDs are in the format "query-{positionType}"

        debouncedSearch(query, positionType);
    });
});


let startMarker = null;
let endMarker = null;
function attachClickHandler() {
    var searchResults = document.querySelectorAll('.search-result');
    for (var i = 0; i < searchResults.length; i++) {
        $(searchResults[i]).one('click', function () {
            var lat = this.dataset.lat;
            var long = this.dataset.long;
            const selectedLocation = $(this).text().trim(); // trim whitespace
            const positionType = $(this).data('position-type');

            $("#query-" + positionType).val(selectedLocation);

            // remove previous marker for the corresponding input type
            var markerToRemove = map.hasLayer(startMarker) && positionType === 'start' ? startMarker : endMarker;
            if (markerToRemove) {
                map.removeLayer(markerToRemove);
            }

            var marker = L.marker([lat, long], {
                draggable: 'true',
                name: positionType + '-marker',
                icon: (positionType === 'start' ? startIcon : endIcon)
            }).addTo(map);

            // set the corresponding marker variable
            if (positionType === 'start') {
                startMarker = marker;
            } else {
                endMarker = marker;
            }

            marker.on('dragend', function (event) {
                var marker = event.target;
                var position = marker.getLatLng();
                findAddress(position.lat, position.lng, positionType);
                marker.setLatLng(new L.latLng(position.lat, position.lng), {
                    draggable: 'true'
                });
                map.panTo(new L.latLng(position.lat, position.lng));
            });

            var zoom = 5; // 13 default
            map.setView([lat, long], zoom);

            $("#search-results").html('');
        });
    }
}

async function findAddress(lat, long, marker) {
    const api = `https://nominatim.openstreetmap.org/reverse?lat=${lat}&lon=${long}&format=json`;
    const response = await fetch(api);
    const data = await response.json();
    $(`#query-${marker}`).val(data.display_name);
}

