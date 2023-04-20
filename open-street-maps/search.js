import { debounce } from './debounce.js';
import { attachClickHandler } from './click-result.js';


async function search(query, positionType) {
    console.log("searching...");
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

    const searchUrl = `https://nominatim.openstreetmap.org/search?format=geojson&limit=5&street=${encodeURIComponent(query)}`;
    try {
        const response = await fetch(searchUrl, { headers: { 'User-Agent': 'My Application' } });
        const data = await response.json();
        const addressHtml = data.features.map((element) => `
            <a href="#" class="list-group-item list-group-item-action search-result" data-lat='${element.geometry.coordinates[1]}' data-long='${element.geometry.coordinates[0]}' data-position-type='${positionType}'>
                ${element.properties.display_name}
            </a> `).join("");

        $("#search-results").html(`
            <div class="card mb-3">
                <div class="card-header">Address suggestion:</div>
                <div class="list-group list-group-flush">${addressHtml}</div>
            </div> `);

        attachClickHandler();
    } catch (error) {
        console.error(error);
    }
}

const debouncedSearch = debounce(search, 500);
document.querySelectorAll('.search-input').forEach(function (input) {
    input.addEventListener('input', function () {
        const query = input.value;
        const positionType = input.id.split('-')[1]; // Assumes input IDs are in the format "query-{positionType}"

        debouncedSearch(query, positionType);
    });
});


