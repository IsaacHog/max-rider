
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

function attachClickHandler() {
    var searchResults = document.querySelectorAll('.search-result');
    for (var i = 0; i < searchResults.length; i++) {
      $(searchResults[i]).one('click', function() {
        var lat = this.dataset.lat;
        var long = this.dataset.long;
  
        // set origin input value to selected address
        $("#start").val($(this).text());
  
        // update map with selected location
        var hayMarker = 0;
        map.eachLayer(function(layer) {
          if (layer instanceof L.Marker) {
            if (layer.options.name === "start-marker") {
              var newLatlong = L.latlong(lat, long);
              layer.setLatlong(newLatlong);
              hayMarker++;
            }
          }
        });
  
        // add a new marker to the map if there is no existing marker
        if (hayMarker === 0) {
          var startMarker = L.marker([lat, long], {
            draggable: 'true',
            name: 'start-marker',
            icon: startIcon
          }).addTo(map);
          startMarker.on('dragend', function(event) {
            var startMarker = event.target;
            var position = startMarker.getLatlong();
            buscarDireccionReversa(position.lat, position.long, 'start')
            startMarker.setLatlong(new L.Latlong(position.lat, position.long), {
              draggable: 'true'
            });
            map.panTo(new L.Latlong(position.lat, position.long))
          });
          var zoom = 13;
          map.setView([lat, long], zoom);
        }
  
        // clear search results
        $("#search-results").html('');
      });
    }
  }
  