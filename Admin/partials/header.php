<?php 

    include('../Config/constants.php'); 
    include('login-check.php');

?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title> ShubhVivaah Website </title>

        <link rel="stylesheet" href="../css/admin.css">

    </head>
    <body>

        <!-- ------------------- Menu Section Starts --------------------- -->
        <div class="menu">
            <div class="logo text-right">
                    <a href="#" title="Logo">
                        <img src="../images/Tlogo.png" alt="Shubhvivaah Logo" class="img-responsive" style="width: 8%; margin-left: 30px; margin-top: 20px;">
                    </a>
            </div>

            <div class="wrapper text-center">

                <ul> 
                    <li><a href="index.php">Home</a></li>
                    <li><a href="manage-admin.php">Admin</a></li>
                    <li><a href="manage-category.php">Category</a></li>
                    <li><a href="manage-food.php">Food</a></li>
                    <li><a href="manage-order.php">Order</a></li>
                    <li><a href="logout.php">Logout</a></li>
                </ul>
               

            </div>
        </div>
        <!-- ------------------- Menu Section Ends --------------------- -->

    </body>
</html>