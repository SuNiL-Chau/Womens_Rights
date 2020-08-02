<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sunil";

// below is the website hosting data connection and above local host

// $servername = "localhost";
// $username = "id14513392_root";
// $password = "JGE\sF#BK2zxzqa&";
// $dbname = "id14513392_rights";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

?>