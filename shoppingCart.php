<?php
$servername = "127.0.0.1";
$username = "root";
$password = "123";
$database = "mysql";

// Create connection
$connect = mysqli_connect($servername, $username, $password, $database);

// Check connection
if (!$connect) {
  die ("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";





?>