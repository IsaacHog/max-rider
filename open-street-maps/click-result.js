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
