<!---------------- Header Section Starts Here -------------------->


<?php
    @include 'config.php';

    session_start();

    if(!isset($_SESSION['user_name'])){
        header('location: login.php');
    }
?>
<!--<section class="header">
    <img src="./images/Tlogo.png" alt="" href="home.php" class="logo">

    <nav class="navbar">
        <a href="home.php"> Home </a>
        <a href="about.php"> About </a>
        <a href="portfolio.php"> Portfolio </a>
        <a href="premium.php"> Premium </a>
        <a href="contact.php"> Contact </a>
    </nav>

    <div id="menu-btn" class="fas fa-bars"></div>
</section>-->

<section>
    <div class="header">
        <img src="./images/Tlogo.png" alt="" href="home.php" class="logo">
        <div class="wrap">
            <div class="top-nav">
                <ul class="topnav" id="myTopnav">

                    <?php 
                        $sel = "SELECT * FROM tbl_user";
                        $query = mysqli_query($conn, $sel);
                        $resul = mysqli_fetch_assoc($query);
                    ?>

                    <li><a href="home.php"> Home </a></li>
                    <li><a href="about.php"> About </a></li>
                    <li><a href="portfolio.php"> Portfolio </a></li>
                    <li><a href="premium.php"> Premium </a></li>
                    <li><a href="contact.php"> Contact </a></li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                            <i class="fas fa-user"></i>
                            <?php echo $resul['username']; ?>
                        </a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="profile.php"> My Profile </a>
                            <a class="dropdown-item" href="logout.php"> Logout </a>
                        </div>
                    </li>
                    
                    <li class="icon">
                    <a href="javascript:void(0);" style="font-size: 35px;" onclick="myFunction()">☰</a></li>
                </ul>
            </div>
            <div class="clear"> </div>
        </div>
    </div>
</section>

<script>
    function myFunction() {
    var x = document.getElementById("myTopnav");
    if (x.className === "topnav") {
        x.className += " responsive";
    } else {
        x.className = "topnav";
    }
}
</script>


<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>

<!---------------- Header Section Ends Here -------------------->