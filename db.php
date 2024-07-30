<?php
$db['db_host'] = 'localhost';
$db['db_user'] = 'u927419660_blog';
$db['db_pass'] = '0qEkxGoS7@';
$db['db_name'] = 'u927419660_blog';




$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
// echo "DB Connected successfully";
?>