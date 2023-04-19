var timeoutId;

function search() {
    var query = encodeURIComponent(document.getElementById('query').value);

    // Reduce API stress
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

    if (timeoutId) {
        clearTimeout(timeoutId);
    }

    timeoutId = setTimeout(function() {
        var searchUrl = "https://nominatim.openstreetmap.org/search?q=" + query + "&format=jsonv2&addressdetails=1&limit=1";

        fetch(searchUrl, { headers: { 'User-Agent': 'My Application' } })
            .then(response => response.json())
            .then(data => {
                var searchResult = data[0];

                var lookupUrl = "https://nominatim.openstreetmap.org/reverse?format=jsonv2&lat=" + searchResult.lat + "&lon=" + searchResult.lon + "&zoom=18&addressdetails=1";

                fetch(lookupUrl, { headers: { 'User-Agent': 'My Application' } })
                    .then(response => response.json())
                    .then(data => {
                        var address = data.display_name;
                        
                        var addressHtml = '<div class="card">';
                        addressHtml += '<div class="card-header">Address:</div>';
                        addressHtml += '<div class="card-body">';
                        addressHtml += '<p class="card-text">' + address + '</p>';
                        addressHtml += '</div>';
                        addressHtml += '</div>';
                        

                        document.getElementById('search-results').innerHTML = addressHtml;
                    })
                    .catch(error => console.error(error));
            })
            .catch(error => console.error(error));
    }, 500); // wait 500ms before making the API call
}
