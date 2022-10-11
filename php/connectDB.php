<?php

$servername = "localhost";
$username = "cineverseadmin";
$password = "cineverseadmin2022";
$dbname = "cineverse";

// Create connection
@ $db = new mysqli($servername, $username, $password, $dbname);
// Check connection
if (mysqli_connect_errno()) {
    die("Connection failed: " . mysqli_connect_error());
} else {
    echo '<script>console.log("Successful connection to SQL db"); </script>';
}

?>