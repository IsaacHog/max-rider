window.onload = function () {
    const startMarker = JSON.parse(localStorage.getItem('start-marker'));
    if (!startMarker) {
        console.log("start-marker")
        return
    }
    L.marker([startMarker.lat, startMarker.long], {
        draggable: 'false',
        name: 'start-marker',
        icon: startIcon
    }).addTo(map);
    localStorage.clear()
};