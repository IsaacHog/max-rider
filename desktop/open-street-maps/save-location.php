<?php
// Define database connection variables
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "isaacsakda";

// Create a connection to the database
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve the latitude, longitude, and display name from the AJAX request
$lat = $_POST["lat"];
$long = $_POST["long"];
$selected_location = $_POST["selectedLocation"];
$position_type = $_POST["positionType"];

// Insert the location data into the database
$sql = "INSERT INTO locations (lat, `long`, selected_location, position_type) VALUES ('$lat', '$long', '$selected_location', '$position_type')";

if ($conn->query($sql) === TRUE) {
    echo "Location saved to database";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close the database connection
$conn->close();
?>
