<?php

@include 'config.php';

if(isset($_POST['submit'])){

   $full_name = mysqli_real_escape_string($conn, $_POST['full_name']);
   $username = mysqli_real_escape_string($conn,$_POST['username']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $password = md5($_POST['password']);
   $confirm_password = md5($_POST['confirm_password']);
   $user_type = $_POST['user_type'];

   $select = " SELECT * FROM tbl_user WHERE email = '$email' && password = '$password' ";

   $result = mysqli_query($conn, $select);

   if(mysqli_num_rows($result) > 0){

      $error[] = 'user already exist!';

   }else{

      if($password != $confirm_password){
         $error[] = 'password not matched!';
      }else{
         $insert = "INSERT INTO tbl_user(full_name, username, email, password, user_type) VALUES('$full_name','$username', '$email','$password','$user_type')";
         mysqli_query($conn, $insert);
         header('location:login.php');
      }
   }

};


?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>register form</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/reg-style.css">

</head>
<body>
   
<div class="form-container" style="background: url(images/bg_2.png) no-repeat; background-size: cover; background-position: center;">

   <form action="" method="post">
      <img src="images/Tlogo.png" alt="" style="width: 30%; height:30%; margin-bottom: -2rem;">
      <h3>register now</h3>
      <?php
      if(isset($error)){
         foreach($error as $error){
            echo '<span class="error-msg">'.$error.'</span>';
         };
      };
      ?>
      <input type="text" name="full_name" required placeholder="Enter your full name">
	  <input type="text" name="username" required placeholder="Enter your username">
      <input type="email" name="email" required placeholder="Enter your email">
      <input type="password" name="password" required placeholder="Enter your password">
      <input type="password" name="confirm_password" required placeholder="Confirm your password">
      <select name="user_type">
         <option value="user">user</option>
         <option value="admin">admin</option>
      </select>
      <input type="submit" name="submit" value="Register Now" class="form-btn">
      <p>already have an account? <a href="login.php"> Login Now </a></p>
   </form>

</div>


<?php 

      if(isset($_POST['submit'])){
         $full_name = $_POST['full_name'];
      }

?>

</body>
</html>