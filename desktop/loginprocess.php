<?php
    // Get values from login and choosing correct table to put the data in from login.php
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Connect to the server and database using mysqli
    $conn = mysqli_connect("localhost", "root", "", "isaacsakda");

    // Sanitize user input to prevent SQL injection
    $email = mysqli_real_escape_string($conn, $email);
    $password = mysqli_real_escape_string($conn, $password);

    // Query the database for users using prepared statement
    $stmt = mysqli_prepare($conn, "SELECT * FROM users WHERE email = ? AND password = ?");
    mysqli_stmt_bind_param($stmt, "ss", $email, $password);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);

    $row = mysqli_fetch_array($result);
    if($row) 
    {
        header("Location: solicitar_pedido.php"); 
    } 
    else 
    {
        echo "Inloggningen misslyckades";
    }
?>
