<?php
$servername = "localhost";
$user = "root";
$pass = "";
$database = "admin";

$conn = mysqli_connect($servername, $user, $pass, $database);
if (!$conn) {
  die("Kết nối thất bại: " . mysqli_connect_error());
}
?>
