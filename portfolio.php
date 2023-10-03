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

    <!-- Light Gallery CSS link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightgallery-js/1.4.0/css/lightgallery.min.css" integrity="sha512-kwJUhJJaTDzGp6VTPBbMQWBFUof6+pv0SM3s8fo+E6XnPmVmtfwENK0vHYup3tsYnqHgRDoBDTJWoq7rnQw2+g==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!--  Custom css file link -->
    <link rel="stylesheet" href="css/style.css">

    <title>Portfolio</title>
</head>
<body>

    <div class="container">
        <?php @include 'header.php'; ?>


        
        <!-- Portfolio section Starts Here -->
        <section class="portfolio">
            
            <h1 class="heading"> Our Portfolio </h1>

            <div class="portfolio-container">

                <a href="images/img24.jpg" class="box">
                    <div class="image">
                        <img src="images/img24.jpg" alt="">
                    </div>
                    <h3> Wedding Ceremony </h3>
                </a>

                <a href="images/img21.jpg" class="box">
                    <div class="image">
                        <img src="images/img21.jpg" alt="">
                    </div>
                    <h3> Wedding Ceremony </h3>
                </a>

                <a href="images/img22.jpg" class="box">
                    <div class="image">
                        <img src="images/img22.jpg" alt="">
                    </div>
                    <h3> Wedding Ceremony </h3>
                </a>

                <a href="images/img23.jpg" class="box">
                    <div class="image">
                        <img src="images/img23.jpg" alt="">
                    </div>
                    <h3> Wedding Ceremony </h3>
                </a>

                <a href="images/img28.jpg" class="box">
                    <div class="image">
                        <img src="images/img28.jpg" alt="">
                    </div>
                    <h3> Wedding Ceremony </h3>
                </a>

                <a href="images/img25.jpg" class="box">
                    <div class="image">
                        <img src="images/img25.jpg" alt="">
                    </div>
                    <h3> Wedding Ceremony </h3>
                </a>

            </div>
        </section>


        <?php @include 'footer.php'; ?>


    </div>
    










    <!-- Custom js file link -->
    <link rel="stylesheet" href="js/script.js">

    <!-- Light Gallery js link -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lightgallery-js/1.4.0/js/lightgallery.min.js" integrity="sha512-b4rL1m5b76KrUhDkj2Vf14Y0l1NtbiNXwV+SzOzLGv6Tz1roJHa70yr8RmTUswrauu2Wgb/xBJPR8v80pQYKtQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <!-- Swiper js link -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>

    <script>
        lightGallery(document.querySelector('.portfolio .portfolio-container'));
    </script>
    
</body>
</html>