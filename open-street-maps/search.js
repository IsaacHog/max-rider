
import { debounce } from './debounce.js';

function search() {
    console.log("searching...")
    var query = encodeURIComponent(document.getElementById('query').value);
    if (query.length < 3 || query.length === 0) {
        $("#search-results").html(
            `<div class="card">
                <div class="card-header">Address:</div>
                <div class="card-body">
                    <p>No results</p>
                </div>
            </div>`);
        return;
    }

    var searchUrl = `https://nominatim.openstreetmap.org/search?format=geojson&limit=5&street=${query}`;
    fetch(searchUrl, { headers: { 'User-Agent': 'My Application' } })
        .then(response => response.json())
        .then(data => {
            var addressHtml = '';
            data.features.forEach((element) => {
                addressHtml += `
                    <a href="#" class="list-group-item list-group-item-action search-result" data-lat='${element.geometry.coordinates[1]}' data-long='${element.geometry.coordinates[0]}'>
                        ${element.properties.display_name}
                    </a>
                `;
            });
            if (addressHtml === '') {
                $("#search-results").html(
                    `<div class="card">
                        <div class="card-header">Address:</div>
                        <div class="card-body">
                            <p>No results</p>
                        </div>
                    </div>`
                );
            } else {
                $("#search-results").html(
                    `<div class="card">
                        <div class="card-header">Address:</div>
                        <div class="list-group list-group-flush">${addressHtml}</div>
                    </div>`
                );
            }

            attachClickHandler();
        })
        .catch(error => console.error(error));
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

            var zoom = 13;
            map.setView([lat, long], zoom);

            previousMarker = startMarker;

            $("#search-results").html('');
        });
    }
}


function findAdress(lat, long, marker) {
    map.eachLayer(function (layer) {
        if (layer instanceof L.Polyline) {
            map.removeLayer(layer);
        }
    });
    const api = 'https://nominatim.openstreetmap.org/reverse?lat=' + lat + '&lon=' + long + '&format=json';
    $.ajax({
        url: api,
        method: 'GET',
    })
        .done(function (data) {
            $("#" + marker).val(data.display_name)
        })
}
