<?php

@include 'config.php';

session_start();

if(!isset($_SESSION['user_name'])){
   header('location:home.php');
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
    <title>Home</title>
</head>
<body>

    <div class="container">
        <?php @include 'header.php'; ?><br>

        
        <!-------------- Food Search Section Starts Here --------------->
        <section class="search text-center">
            <form method="post" class="search text-center">
                <input type="text" name="search" placeholder="Search for user..">
                <input type="submit" name="submit" class="btn btn-primary">
            </form>

        </section><br><br><br><br>
        <!---------------- Food Search Section Ends Here --------------->


   



        <!---------------- Home Section Starts Here -------------------->

        <!-- Home Slider -->
        <section class="home">
            <div class="swiper home-slider">
                <div class="swiper-wrapper">
                    <div class="swiper-slide slide" style="background: url(images/img19.jpg) no-repeat; background-size: cover; background-position: center;">
                        <div class="content">
                            <h3> Plan Your Wedding! </h3>
                            <p>
                                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Id, rem eius laudantium voluptate facere consequuntur, nostrum tempora alias assumenda saepe quisquam nisi ratione sapiente voluptas totam libero ad quaerat obcaecati. Cupiditate quia fuga delectus autem.
                            </p>
                            <a href="about.php" class="btn"> Discover more </a>
                        </div>
                    </div>
                        
                    <div class="swiper-slide slide" style="background: url(images/img23.jpg) no-repeat; background-size: cover; background-position: center;">
                        <div class="content">
                            <h3> Plan Your Wedding! </h3>
                            <p>
                                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Id, rem eius laudantium voluptate facere consequuntur, nostrum tempora alias assumenda saepe quisquam nisi ratione sapiente voluptas totam libero ad quaerat obcaecati. Cupiditate quia fuga delectus autem.
                            </p>
                            <a href="about.php" class="btn"> Discover more </a>
                        </div>
                    </div>

                    <div class="swiper-slide slide" style="background: url(images/img22.jpg) no-repeat; background-size: cover; background-position: center;">
                        <div class="content">
                            <h3> Plan Your Wedding! </h3>
                            <p>
                                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Id, rem eius laudantium voluptate facere consequuntur, nostrum tempora alias assumenda saepe quisquam nisi ratione sapiente voluptas totam libero ad quaerat obcaecati. Cupiditate quia fuga delectus autem.
                            </p>
                            <a href="about.php" class="btn"> Discover more </a>
                        </div>
                    </div>
                        
                </div>

                <div class="swiper-pagination"></div>

            </div>
        </section><br><br><br><br>



        
    

        <!------------------ About Us Section Starts Here ----------------------->

        <table class="about-us"> 
            <tr>
                <td id="img">
                    <img src="images/img10.jpg" width="350rem" height="400rem">
                </td>
                <td>
                    <h1 class="heading"> Our Story </h1><br>
                    <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b> Lorem ipsum, dolor sit amet consectetur adipisicing elit. Corporis nostrum ab ipsa exercitationem, id odit quos reiciendis sequi possimus? Unde repellendus ex dolor modi, dolores, sequi magni eveniet autem quia laudantium beatae nulla tempora aspernatur blanditiis omnis quas aut dolorum consectetur voluptatum odio! Voluptatum numquam eum ut exercitationem minus perspiciatis corrupti laboriosam culpa, pariatur reprehenderit autem accusamus dicta doloremque beatae! </b></p>
                    <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b> Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum, maxime. Consequatur natus aut cumque architecto, alias molestiae aspernatur accusantium laborum repudiandae recusandae quisquam ea esse neque optio ullam et repellendus. </b></p>
                    <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b> Lorem ipsum dolor, sit amet consectetur adipisicing elit. Reiciendis, sequi beatae voluptatibus facere hic nisi nobis, quibusdam voluptate modi, vitae itaque doloremque molestiae adipisci natus quisquam cum ab fugit aspernatur eligendi explicabo. Dolorum debitis repellendus architecto nobis. Quae explicabo eveniet dolorum. Vitae accusamus minima repellendus? </b></p>
                    <br><br><br>
                    
                    <a href="about.php" id="button"> Learn More </a>
                    
                </td>

            </tr>
        </table><br><br><br><br>

        <!------------------ About Us Section Ends Here ----------------------->       





        <!-- Services Slide -->
        <section class="services">
            
            <h1 class="heading"> Our Services </h1>
            
            <div class="swiper service-slider">
                
                <div class="swiper-wrapper">

                    <div class="swiper-slide slide">
                        <img src = "images/img23.jpg" alt="">
                        <div class="content">
                            <h3> Photography </h3>
                            <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam, ex! </p>
                            <a href="about.php" class="btn"> About Us </a>
                        </div>
                    </div>

                    <div class="swiper-slide slide">
                        <img src = "images/img21.jpg" alt="">
                        <div class="content">
                            <h3> Wedding Registory </h3>
                            <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam, ex! </p>
                            <a href="about.php" class="btn"> About Us </a>
                        </div>
                    </div>

                    <div class="swiper-slide slide">
                        <img src = "images/img24.jpg" alt="">
                        <div class="content">
                            <h3> Guest List </h3>
                            <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam, ex! </p>
                            <a href="about.php" class="btn"> About Us </a>
                        </div>
                    </div>

                    <div class="swiper-slide slide">
                        <img src = "images/img25.jpg" alt="">
                        <div class="content">
                            <h3> Wedding Cake </h3>
                            <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam, ex! </p>
                            <a href="about.php" class="btn"> About Us </a>
                        </div>
                    </div>

                    <div class="swiper-slide slide">
                        <img src = "images/img28.jpg" alt="">
                        <div class="content">
                            <h3> Wedding Ceremony </h3>
                            <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam, ex! </p>
                            <a href="about.php" class="btn"> About Us </a>
                        </div>
                    </div>

                    <div class="swiper-slide slide">
                        <img src = "images/img17.jpg" alt="">
                        <div class="content">
                            <h3> Fine Dining </h3>
                            <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam, ex! </p>
                            <a href="about.php" class="btn"> About Us </a>
                        </div>
                    </div>

                </div>

                <div class="swiper-pagination"></div>

            </div>
        </section> <br><br><br>



        <!---------------- Quick Enquiry Section Starts Here --------------->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <button class="open-button" onclick="openForm()" style="font-weight: bolder; font-size: large;"><b><i class="fa fa-pencil"> </i> Quick Enquiry</b></button>

    <div class="form-popup" id="myForm">
        <form action="PROJECT.html" class="form-container">
            <legend><h1>Quick Enquiry</h1></legend>


        
            <input type="text" placeholder="Enter First Name" name="fname" required>
            <input type="text" placeholder="Enter Last Name" name="lname" required>


            <label for="email"></label>
            <input type="text" placeholder="Enter Email" name="email" required>

            <!-- <label for="psw"><b>Password</b></label>
            <input type="password" placeholder="Enter Password" name="psw" required> -->

            <textarea placeholder="Enter More Details" rows="6" cols="50"></textarea>

            <button type="submit" class="btn" onclick="alert(' Thank you for your feedback !   We will connect you soon..')">Submit</button>
            <button type="button" class="btn cancel" onclick="closeForm()">Cancel</button>
        </form>
    </div>

    <script>
        function openForm() {
            document.getElementById("myForm").style.display = "block";
        }

        function closeForm() {
            document.getElementById("myForm").style.display = "none";
        }
    </script>

<!------------------ Quick Enquiry Section Ends Here ------------------>




        <?php @include 'footer.php'; ?>


    </div>
    










    <!-- Custom js file link -->
    <link rel="stylesheet" href="js/script.js">

    <!-- Swiper js link -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>

    <script>
        var swiper = new Swiper(".home-slider", {
            loop: true,
            spaceBetween: 20,
            grabCursor: true,
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
        });
    </script>

    <script>
        var swiper = new Swiper(".service-slider", {
            loop: true,
            spaceBetween: 20,
            grabCursor: true,
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
            breakpoints: {
                450: {
                    slidesPerView: 1,
                },
                768: {
                    slidesPerView: 2,
                },
                1000: {
                    slidesPerView: 3,
                },
            },
        });
    </script>
    
</body>
</html>



<?php

$con = new PDO("mysql:host=localhost;dbname=CodeFlix",'root','');

if (isset($_POST["submit"])) {
	$str = $_POST["search"];
	$sth = $con->prepare("SELECT * FROM `search` WHERE Name = '$str'");

	$sth->setFetchMode(PDO:: FETCH_OBJ);
	$sth -> execute();

	if($row = $sth->fetch())
	{
		?>
		<br><br><br>
		<table>
			<tr>
				<th>Name</th>
				<th>Description</th>
			</tr>
			<tr>
				<td><?php echo $row->Name; ?></td>
				<td><?php echo $row->Description;?></td>
			</tr>

		</table>
<?php 
	}
		
		
		else{
			echo "Name Does not exist";
		}


}

?>