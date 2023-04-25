import { displayRoute } from "./route.js";

let startMarker = null;
let endMarker = null;

export function attachClickHandler() {
  var searchResults = document.querySelectorAll('.search-result');
  for (var i = 0; i < searchResults.length; i++) {
    $(searchResults[i]).one('click', function () {
      var lat = this.dataset.lat;
      var long = this.dataset.long;

      const selectedLocation = $(this).text().trim(); // trim whitespace
      const positionType = $(this).data('position-type');

      localStorage.setItem(`${positionType}-marker`, JSON.stringify({ lat: lat, long: long, location: selectedLocation, positionType: positionType }));
      $("#query-" + positionType).val(selectedLocation);

      // remove previous marker for the corresponding input type
      var markerToRemove = map.hasLayer(startMarker) && positionType === 'start' ? startMarker : endMarker;
      if (markerToRemove) {
        map.removeLayer(markerToRemove);
        map.eachLayer(function (layer) {
          if (layer instanceof L.Polyline && layer.options.id === 'route') {
            map.removeLayer(layer);
          }
        });
      }

      var marker = L.marker([lat, long], {
        draggable: 'true',
        name: positionType + '-marker',
        icon: (positionType === 'start' ? startIcon : endIcon)
      }).addTo(map);

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
        if (startMarker !== null && endMarker !== null) {
          displayRoute(startMarker, endMarker);
        }
      });

      var zoom = 13;
      map.setView([lat, long], zoom);

      $("#search-results-start").html('');
      $("#search-results-end").html('');

      if (startMarker !== null && endMarker !== null) {
        displayRoute(startMarker, endMarker);
      }
    });
  }
}


async function findAddress(lat, long, marker) {
  const api = `https://nominatim.openstreetmap.org/reverse?lat=${lat}&lon=${long}&format=json`;
  const response = await fetch(api);
  const data = await response.json();
  $(`#query-${marker}`).val(data.display_name);
}
