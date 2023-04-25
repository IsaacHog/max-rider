window.onload = function () {
    const startMarker = JSON.parse(localStorage.getItem('start-marker'));
    const endMarker = JSON.parse(localStorage.getItem('end-marker'));
    //localStorage.clear()

    if (startMarker === null || endMarker === null) {
        console.log("startMarker === null || endMarker === null")
        return
    }
    L.marker([startMarker.lat, startMarker.long], {
        draggable: 'false',
        name: 'start-marker',
        icon: startIcon
    }).addTo(map);

    L.marker([endMarker.lat, endMarker.long], {
        draggable: 'false',
        name: 'end-marker',
        icon: endIcon
    }).addTo(map);

    $("#address-start").text(startMarker.location);
    $("#address-end").text(endMarker.location);
};