<?php 

    // Start the Session
    session_start();



    // Create constants to store non-repeating values.
    define('SITEURL', 'http://localhost/shubhvivaah/');
    define('LOCALHOST', 'localhost');
    define('DB_USERNAME', 'root');
    define('DB_PASSWORD', 'newpassword');
    define('DB_NAME', 'shubhvivaah_db');


    $conn = mysqli_connect(LOCALHOST, DB_USERNAME, DB_PASSWORD) or die(mysqli_error($conn));    // Database Connection
    $db_select = mysqli_select_db($conn, DB_NAME) or die(mysqli_error($conn));    // Selecting Database


?>