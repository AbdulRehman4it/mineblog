<?php
// $conn = mysqli_connect(DB_HOST, DB_USER,DB_PASS, DB_NAME);
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
// echo "Connected successfully";
?>