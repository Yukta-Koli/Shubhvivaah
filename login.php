<?php

@include 'config.php';

session_start();

if(isset($_POST['submit'])){

   $full_name = mysqli_real_escape_string($conn, $_POST['full_name']);
   $username = mysqli_real_escape_string($conn,$_POST['username']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $password = md5($_POST['password']);
   $confirm_password = md5($_POST['confirm_password']);
   $user_type = $_POST['user_type'];

   $select = " SELECT * FROM tbl_user WHERE email = '$email' && password = '$password' && username = '$username' ";

   $result = mysqli_query($conn, $select);

   if(mysqli_num_rows($result) > 0){

      $row = mysqli_fetch_array($result);

      if($row['user_type'] == 'admin'){

         $_SESSION['admin_name'] = $row['full_name'];
         header('location:admin/index.php');

      }elseif($row['user_type'] == 'user'){

         $_SESSION['user_name'] = $row['full_name'];
         header('location:home.php');

      }
     
   }else{
      $error[] = 'incorrect email or password!';
   }


};
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title> Login Form </title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/reg-style.css">

</head>
<body>
   
<div class="form-container" style="background: url(images/bg_2.png) no-repeat; background-size: cover; background-position: center;">

   <form action="" method="post">
      <img src="images/Tlogo.png" alt="" style="width: 30%; height: 30%; margin-bottom: -2rem;">
      <h3> Login Now </h3>
      <?php
      if(isset($error)){
         foreach($error as $error){
            echo '<span class="error-msg">'.$error.'</span>';
         };
      };
      ?>
      <input type="email" name="email" required placeholder="Enter your email">
      <input type="password" name="password" required placeholder="Enter your password">
      <input type="submit" name="submit" value="Login Now" class="form-btn">
      <p>don't have an account? <a href="register.php"> Register Now </a></p>
   </form>

</div>

</body>
</html>