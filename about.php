<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- Font awesome cdn link -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/fontawesome.min.css">

        <!-- Swiper css link -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />

        <!--  Custom css file link -->
        <link rel="stylesheet" href="css/style.css">

        <title>About</title>
    </head>

    <body>

        <div class="container">
            <?php @include 'header.php'; ?>



            <!-- About section starts here -->
            <section class="about">
                <img src="images/about-img4.png" alt="">
                <h3> About Us </h3>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Velit veritatis error vel iste expedita
                    modi cupiditate omnis quasi earum architecto veniam eos culpa impedit sit magni, deleniti et. Iste,
                    magni consequuntur. Tenetur, sunt! Dolore inventore non quaerat expedita quibusdam vitae possimus
                    aspernatur aliquam cum enim.</p>
                <a href="contact.php" class="btn"> Contact Us </a>
            </section><br><br>



            <!-- Our Team -->
            <section class="team">

                <h1 class="heading"> Our Team </h1>
                
                <div class="team-container">
                    <div class="box">
                        <img src="images/reviews/team-1.png" alt="">
                        <h3> John Doe</h3>
                        <p>Wedding Planner</p>
                        <div class="share">
                            <a href="#" class="fab fa-facebook-f"></a>
                            <a href="#" class="fab fa-twitter"></a>
                            <a href="#" class="fab fa-linkedin"></a>
                            <a href="#" class="fab fa-instagram"></a>
                        </div>
                    </div>

                    <div class="box">
                        <img src="images/reviews/team-5.jpg" alt="">
                        <h3> John Doe</h3>
                        <p>Wedding Planner</p>
                        <div class="share">
                            <a href="#" class="fab fa-facebook-f"></a>
                            <a href="#" class="fab fa-twitter"></a>
                            <a href="#" class="fab fa-linkedin"></a>
                            <a href="#" class="fab fa-instagram"></a>
                        </div>
                    </div>

                    <div class="box">
                        <img src="images/reviews/team-3.png" alt="">
                        <h3> John Doe</h3>
                        <p>Wedding Planner</p>
                        <div class="share">
                            <a href="#" class="fab fa-facebook-f"></a>
                            <a href="#" class="fab fa-twitter"></a>
                            <a href="#" class="fab fa-linkedin"></a>
                            <a href="#" class="fab fa-instagram"></a>
                        </div>
                    </div>
                    
                    <div class="box">
                        <img src="images/reviews/team-6.jpg" alt="">
                        <h3> John Doe</h3>
                        <p>Wedding Planner</p>
                        <div class="share">
                            <a href="#" class="fab fa-facebook-f"></a>
                            <a href="#" class="fab fa-twitter"></a>
                            <a href="#" class="fab fa-linkedin"></a>
                            <a href="#" class="fab fa-instagram"></a>
                        </div>
                    </div>

                </div>

            </section><br><br><br>
            <!-- About section ends here -->



            <?php @include 'footer.php'; ?>


        </div>











        <!-- Custom js file link -->
        <link rel="stylesheet" href="js/script.js">

        <!-- Swiper js link -->
        <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>


    </body>

</html>