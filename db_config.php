<?php
$hostname = 'localhost';
$username = 'root'; 
$password = '';     
$database = 'taskphp'; 
$conn = mysqli_connect($hostname, $username, "", $database);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
