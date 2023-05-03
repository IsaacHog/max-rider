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

// Retrieve the email and password from the form submission
$email = $_POST["email"];
$password = $_POST["password"];

// Insert the email and password into the database
$sql = "INSERT INTO users (email, password) VALUES ('$email', '$password')";

if ($conn->query($sql) === TRUE) {
    header("Location: login.php");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close the database connection
$conn->close();
?>
