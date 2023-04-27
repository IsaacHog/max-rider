window.onload = function () {
    const startMarker = JSON.parse(localStorage.getItem('start-marker'));
    const endMarker = JSON.parse(localStorage.getItem('end-marker'));

    $("#address-start").text(startMarker.location);
    $("#address-end").text(endMarker.location);
};