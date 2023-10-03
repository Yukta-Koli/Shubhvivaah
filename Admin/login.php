<link rel="stylesheet" type="" href="../css/admin.css">

<?php 
    @include('../partials/preference.php'); 
    @include('../config/constants.php');
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - ShubhVivaah</title>

    <link rel="stylesheet" href="../css/admin.css">

</head>
<body>

    <div class="login">
        <h1  class="text-center">Login</h1><br>

        <?php 
            if(isset($_SESSION['login']))
            {
                echo $_SESSION['login'];
                unset($_SESSION['login']);
            }

            if(isset($_SESSION['no-login-message']))
            {
                echo $_SESSION['no-login-message'];
                unset($_SESSION['no-login-message']);
            }
        ?> <br><br>

        <!-- ---------------- Login Form Starts Here ------------------- -->
        <form action="" method="POST" class="text-center">

        Username : <br>
        <input type="text" name="username" placeholder="Enter Username"><br><br>

        Password : <br>
        <input type="password" name="password" placeholder="Enter Password"><br><br>

        <input type="submit" name="submit" value="Login" class="btn-login"><br><br>

        </form><br>
        <!-- ---------------- Login Form Starts Here ------------------- -->

        <p class="text-center">Created by - <a href="www.creators.com"> Miss. Yukta Koli </a></p>
    </div>

</body>
</html>

<?php 

    // Check Whether the Submit Button is Clicked or Not.
    if(isset($_POST['submit']))
    {
        // Process for Login

        // 1. Get the Data from Login Form.
        
        // $username = $_POST['username'];
        // $password = md5($_POST['password']);

        $username = mysqli_real_escape_string($conn, $_POST['username']);

        $raw_password = md5($_POST['password']);
        $password = mysqli_real_escape_string($conn, $raw_password);

        // 2. SQL to Check Whether User with Username and Password Exists or Not.
        $sql = "SELECT * FROM tbl_admin WHERE username='$username' AND password='$password'";

        // 3. Execute the Query.
        $res = mysqli_query($conn, $sql);

        //  4. Count the Rows to Check Whether the User Exists or Not.
        $count = mysqli_num_rows($res);

        if($count==1)
        {
            // User Available and Login Success.
            $_SESSION['login'] = "<div class='success'> Login Successful </div>";
            $_SESSION['user'] = "$username"; // To Check Whether the User is Logged In or Not and Logout will Unset it.

            // Redirect to Home Page / Dashboard.
            header('location:'.SITEURL.'admin/');
        }
        else
        {
            // User not Availableand LOgin Failure.
            $_SESSION['login'] = "<div class='error text-center'> Username and Password Did Not Match </div>";

            // Redirect to Home Page / Dashboard.
            header('location:'.SITEURL.'admin/login.php');
        }
    }

?>