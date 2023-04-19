var timeoutId;

function search() {
    var query = encodeURIComponent(document.getElementById('query').value);
    console.log(query)
    if (query.length < 3 || query.length === 0) { 
        var addressHtml = '<div class="card">';
        addressHtml += '<div class="card-header">Address:</div>';
        addressHtml += '<div class="card-body">';
        addressHtml += '<p class="card-text">' + "No results" + '</p>';
        addressHtml += '</div>';
        addressHtml += '</div>';
        document.getElementById('search-results').innerHTML = addressHtml;
        return; 
    }

    var searchUrl = `https://nominatim.openstreetmap.org/search?format=geojson&limit=5&street=${query}`;
    console.log("Searching")
    fetch(searchUrl, { headers: { 'User-Agent': 'My Application' } })
        .then(response => response.json())
        .then(data => {
            console.log(data)
            data.features.forEach((element) => {
                console.log(element)
                $("#search-results").append(
                    `<li data-lat='${element.geometry.coordinates[0]}' data-lng='${element.geometry.coordinates[1]}>
                    <p>${element.properties.display_name}</p>
                    </li>`);
            });
            var addressHtml = '<div class="card">';
            addressHtml += '<div class="card-header">Address:</div>';
            addressHtml += '<div class="card-body">';
            addressHtml += '<p class="card-text">' + '</p>';
            addressHtml += '</div>';
            addressHtml += '</div>';
            
        })
        .catch(error => console.error(error));
}
