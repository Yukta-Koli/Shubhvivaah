<?php 

$server = 'localhost';
$username = 'root';
$password = 'newpassword';
$database = 'shubhvivaah_db';

$conn = mysqli_connect($server, $username, $password, $database);

if (!$conn) {
    die("<script>alert('Connection Failed.')</script>");
}

?>