var timeoutId;

function search() {
    var query = encodeURIComponent(document.getElementById('query').value);

    // Reduce API stress
    if (query.length < 3) { return; }
    if (timeoutId) {
        clearTimeout(timeoutId);
    }

    timeoutId = setTimeout(function() {
        var url = "https://nominatim.openstreetmap.org/search?q=" + query + "&format=jsonv2&addressdetails=1";
        fetch(url, { headers: { 'User-Agent': 'My Application' } })
            .then(response => response.json())
            .then(data => {
                var results = '';
                data.forEach(result => {
                    results += result.display_name + '<br>';
                });
                document.getElementById('search-results').innerHTML = results;
            })
            .catch(error => console.error(error));
    }, 500); // wait 500ms before making the API call
}
