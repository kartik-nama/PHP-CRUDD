<?php
// Connection To DB
$servername = "localhost";
$username = "root";
$password = "";
$database = "message";


// Create A Connection
$conn = mysqli_connect($servername, $username, $password, $database);

if (!$conn) {
    die("Connection Failed" . mysqli_connect_error());
}

?>