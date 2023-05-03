<?php
// Define database connection variables
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "locations";

// Create a connection to the database
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve the latitude, longitude, and display name from the AJAX request
$lat = $_POST["lat"];
$long = $_POST["long"];
$location = $_POST["location"];
$position_type = $_POST["positionType"];

// Insert the location data into the database
$sql = "INSERT INTO saved_locations (lat, `long`, location, position_type) VALUES ('$lat', '$long', '$location', '$position_type')";

if ($conn->query($sql) === TRUE) {
    echo "Location saved to database";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close the database connection
$conn->close();
?>
