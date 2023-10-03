<?php 

    //  Authorization - Access Control.
    // Check Whether the User id Logged In or Not.
    if(!isset($_SESSION['user']))   // If User Session is Not Set.
    {
        // User is Not Logged In.

        // Redirect to Login Page with Message.
        $_SESSION['no-login-message'] = "<div class='error text-center'> Please Login to Access Admin Panel. </div>";

        // Redirect to Login Page.
        header('location:'.SITEURL.'admin/login.php');
    }

?>