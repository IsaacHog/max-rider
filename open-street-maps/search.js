function search() {
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
                    <a href="#" class="list-group-item list-group-item-action search-result" data-lat='${element.geometry.coordinates[1]}' data-lng='${element.geometry.coordinates[0]}'>
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

function attachClickHandler() {
    var searchResults = document.querySelectorAll('.search-result');
    for (var i = 0; i < searchResults.length; i++) {
      $(searchResults[i]).one('click', function() {
        var lat = this.dataset.lat;
        var lng = this.dataset.lng;
        console.log(lat);
      });
    }
  }
  