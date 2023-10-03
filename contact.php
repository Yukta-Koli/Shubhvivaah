<?php 
    $conn = mysqli_connect('localhost', 'root', 'newpassword', 'shubhvivaah_db');

    if(isset($_POST['send'])){

        $full_name = $_POST['full_name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $plan = $_POST['plan'];
        $address = $_POST['address'];
        $message = $_POST['message'];
        
        $insert = "INSERT INTO tbl_contact(full_name, email, phone, plan, address, message) VALUES('$full_name', '$email', '$phone', '$plan', '$address', '$message')";

        mysqli_query($conn, $insert);

        header('location: contact.php');
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Font awesome cdn link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/fontawesome.min.css">

    <!-- Swiper css link -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css"/>

    <!--  Custom css file link -->
    <link rel="stylesheet" href="css/style.css">

    <title>Contact</title>
</head>
<body>

    <div class="container">
        <?php @include 'header.php'; ?>


        <section class="contact">
            <h1 class="heading"> Contact Us </h1>

            <form action="" method="post">
                <div class="flex">

                    <div class="inputBox">
                        <span> Name </span>
                        <input type="text" placeholder="Enter your name" name="full_name" value="" required>
                    </div>

                    <div class="inputBox">
                        <span> Email </span>
                        <input type="text" placeholder="Enter your email" name="email" value="" required>
                    </div>

                    <div class="inputBox">
                        <span> Number </span>
                        <input type="text" placeholder="Enter your number" name="phone" value="" required>
                    </div>

                    <div class="inputBox">
                        <span> Choose Plan </span>
                        <select name="plan">
                            <option value="basic"> Basic Plan </option>
                            <option value="standard"> Standard Plan </option>
                            <option value="premium"> Premium Plan </option>
                        </select>
                    </div>

                    <div class="inputBox">
                        <span> Address </span>
                        <textarea name="address" placeholder="Enter your address" rows="30" cols="10" required></textarea>
                    </div>

                    <div class="inputBox">
                        <span> Your Message </span>
                        <textarea name="message" placeholder="Enter your message" rows="30" cols="10" required></textarea>
                    </div>
                
                </div>

                <input type="submit" value="Send Message" name="send" class="btn">

            </form>
        </section>


        <?php @include 'footer.php'; ?>


    </div>
    










    <!-- Custom js file link -->
    <link rel="stylesheet" href="js/script.js">

    <!-- Swiper js link -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>

    
</body>
</html>