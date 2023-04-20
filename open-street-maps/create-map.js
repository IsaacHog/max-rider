// create a map object and set its view to a default location and zoom level
var map = L.map('mapid').setView([51.505, -0.09], 13);

// add a tile layer to the map (using OpenStreetMap tiles)
L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
    attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors',
    maxZoom: 18,
}).addTo(map);
