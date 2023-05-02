<?php
    //Get values from login and choosing correct table to put the data in from login.php
    $username = $POST['email'];
    $password = $POST['password'];

    //connect to the server and database
    mysql_connect("localhost", "root", "");
    mysql_select_db("isaacsakda");

    //query the database for users
    $result = mysql_query("select * from users where email = '$username' and password = '$password'");

    $row = mysql_fetch_array($result);
    if($row['username'] == $username && $row['password'] == $password ) 
    {
        echo "du har loggat in correct, välkommen " $row['username']; 
    } 
    else 
    {
        echo "failed";
    }

?>