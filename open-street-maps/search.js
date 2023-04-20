
import { debounce } from './debounce.js';

async function search() {
    console.log("searching...");
    const query = encodeURIComponent(document.getElementById('query').value);
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

    const searchUrl = `https://nominatim.openstreetmap.org/search?format=geojson&limit=5&street=${query}`;
    try {
        const response = await fetch(searchUrl, { headers: { 'User-Agent': 'My Application' } });
        const data = await response.json();
        const addressHtml = data.features.map((element) => `
            <a href="#" class="list-group-item list-group-item-action search-result" data-lat='${element.geometry.coordinates[1]}' data-long='${element.geometry.coordinates[0]}'>
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
document.getElementById('query').addEventListener('input', debouncedSearch);

let previousMarker = null;
function attachClickHandler() {
    var searchResults = document.querySelectorAll('.search-result');
    for (var i = 0; i < searchResults.length; i++) {
        $(searchResults[i]).one('click', function () {
            var lat = this.dataset.lat;
            var long = this.dataset.long;
            $("#start").val($(this).text());

            if (previousMarker) {
                map.removeLayer(previousMarker);
            }

            var startMarker = L.marker([lat, long], {
                draggable: 'true',
                name: 'start-marker',
                icon: startIcon
            }).addTo(map);

            startMarker.on('dragend', function (event) {
                var startMarker = event.target;
                var position = startMarker.getLatLng();
                findAdress(position.lat, position.lng, 'start');
                startMarker.setLatLng(new L.latLng(position.lat, position.lng), {
                    draggable: 'true'
                });
                map.panTo(new L.latLng(position.lat, position.lng));
            });

            var zoom = 5; // 13 default
            map.setView([lat, long], zoom);
            previousMarker = startMarker;

            $("#search-results").html('');
        });
    }
}


async function findAdress(lat, long, marker) {
    const api = `https://nominatim.openstreetmap.org/reverse?lat=${lat}&lon=${long}&format=json`;
    const response = await fetch(api);
    const data = await response.json();
    $(`#${marker}`).val(data.display_name);
}

