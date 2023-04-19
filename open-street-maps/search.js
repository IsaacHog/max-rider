function search() {
    var query = encodeURIComponent(document.getElementById('query').value);
    console.log(query)
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
    console.log("Searching")
    fetch(searchUrl, { headers: { 'User-Agent': 'My Application' } })
        .then(response => response.json())
        .then(data => {
            console.log(data)
            var addressHtml = '';
            data.features.forEach((element) => {
                console.log(element)
                addressHtml += `
                    <a href="#" class="list-group-item list-group-item-action" data-lat='${element.geometry.coordinates[1]}' data-lng='${element.geometry.coordinates[0]}'>
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
        })
        .catch(error => console.error(error));
}
