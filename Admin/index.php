<link rel="stylesheet" href="../css/admin.css">

<?php @include('./partials/header.php'); ?>

<?php 
    @include('../config/constants.php'); 

    if(!isset($_SESSION['admin_name'])){
        header('location: ./admin/login.php');
    }
?>


    <!-- ------------------- Main Content Section Starts --------------------- -->
    <div class="main-content">
        <div class="wrapper">
            <h1>DASHBOARD</h1><br><br>

            <h2>Hi, <span style="color: red"><?php echo $_SESSION['admin_name']?></span></h2>
            <h3>Welcome to <span>Admin Panel</span></h3>

            <?php 
                if(isset($_SESSION['login']))
                {
                    echo $_SESSION['login'];
                    unset($_SESSION['login']);
                }
            ?><br><br>

            <div class="col-4 text-center">

                <?php
                    // SQL Query.
                    $sql = "SELECT * FROM tbl_user";

                    // Execute Query.
                    $res = mysqli_query($conn, $sql);

                    // Count Rows
                    $count = mysqli_num_rows($res);
                ?>

                <h1><?php echo $count; ?></h1><br>
                Registered Users
            </div>
            
           
            <div class="clearfix"></div>
        </div>
    </div>
    <!-- ------------------- Main Content Section Ends --------------------- -->

<?php @include('./partials/footer.php'); ?>