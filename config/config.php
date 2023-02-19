<?php
$servername = "localhost";
$username = "root";
$password = "";
$db = "perkuliahan";

// Create connection
$connect = mysqli_connect($servername, $username, $password, $db);

// Check connection
if (!$connect) {
  die("Connection failed: " . mysqli_connect_error());
}
// echo "Connected successfully";
?>