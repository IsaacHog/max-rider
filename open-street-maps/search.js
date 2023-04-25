import { debounce } from './debounce.js';
import { attachClickHandler } from './click-result.js';


async function search(query, positionType) {
    console.log("searching...");
    if (query.length < 3 || query.length === 0) {
        $("#search-results").html("");
        return;
    }

    const searchUrl = `https://nominatim.openstreetmap.org/search?format=geojson&limit=5&street=${encodeURIComponent(query)}`;
    try {
        const response = await fetch(searchUrl, { headers: { 'User-Agent': 'My Application' } });
        const data = await response.json();
        const addressHtml = data.features.map((element) => `
        <li class="list-group-item" data-lat="${element.geometry.coordinates[1]}" data-long="${element.geometry.coordinates[0]}" data-position-type="${positionType}">
            <a href="#" class="d-block text-decoration-none text-dark py-2 search-result" 
            data-lat="${element.geometry.coordinates[1]}" 
            data-long="${element.geometry.coordinates[0]}" 
            data-position-type="${positionType}">
                ${element.properties.display_name}
            </a>
        </li>
      
        `).join("");

        positionType === "start" ? $("#search-results-start").html(`${addressHtml}`) : $("#search-results-end").html(`${addressHtml}`);
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



// Clear input field buttons
$(".btn-clear-start").on("click", function() {
    $("#query-start").val("");
});

$(".btn-clear-end").on("click", function() {
    $("#query-end").val("");
});


