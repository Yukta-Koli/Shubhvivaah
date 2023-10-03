<?php 
    // Include constants.php for SITEURL.
    @include('../Config/constants.php');
    //@include('../config.php');

    // 1.Destroy the Session.
    session_destroy();  // Unsets $_SESSION['user']

    // 2. Redirect to the Login Page.
    header('location:'.SITEURL.'admin/login.php');

?>  