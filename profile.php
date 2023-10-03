<?php 
    include 'config.php';
    session_start();
    if (isset($_POST['username'])) {
    $username = $_POST['username'];
    $get_user = $mysqli->query("SELECT * FROM tbl_user WHERE email = '$email'");
    if ($get_user->num_rows == 1)
    {
        $profile_data = $get_user->fetch_assoc();

    }

    } 
    ?>


<!DOCTYPE html>
<html>
<head>
    <title>Edit Profile</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
<div class="container">
    <?php
    @include('header.php');
    ?>
    <div class="row">
        <div class="col-sm-3"> </div>
        <div class="col-sm-6">

            <form action="" method="POST" enctype='multipart/form-data'>
                <div class="login_form"><br><br><br>

                <div class="form-group">
                    <div class="row"> 
                        <div class="col-3">
                            <label>First Name</label>
                        </div>
                        <div class="col">
                            <input type="text" name="full_name" value="" class="form-control">
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="row"> 
                        <div class="col-3">
                            <label>Username</label>
                        </div>
                        <div class="col">
                            <input type="text" name="username" value="" class="form-control">
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="row"> 
                        <div class="col-3">
                            <label>Age</label>
                        </div>
                        <div class="col">
                            <input type="text" name="age" value="" class="form-control">
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="row"> 
                        <div class="col-3">
                            <label>Gender</label>
                        </div>
                        <div class="col">
                            <input type="text" name="gender" value="" class="form-control">
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="row"> 
                        <div class="col-3">
                            <label>Occupation</label>
                        </div>
                        <div class="col">
                            <input type="text" name="occupation" value="" class="form-control">
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="row"> 
                        <div class="col-3">
                            <label>Email</label>
                        </div>
                        <div class="col">
                            <input type="text" name="email" value="" class="form-control">
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="row"> 
                        <div class="col-3">
                            <label>Phone</label>
                        </div>
                        <div class="col">
                            <input type="text" name="phone" value="" class="form-control">
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="row"> 
                        <div class="col-3">
                            <label>Culture</label>
                        </div>
                        <div class="col">
                            <input type="text" name="culture" value="" class="form-control">
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="row"> 
                        <div class="col-3">
                            <label>Address</label>
                        </div>
                        <div class="col">
                            <input type="text" name="address" value="" class="form-control">
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="row"> 
                        <div class="col-3">
                            <label>Preference</label>
                        </div>
                        <div class="col">
                            <input type="text" name="preference" value="" class="form-control">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-6"> </div>
                    <div class="col-sm-6">
                        <button  class="btn btn-success" name="update_profile">Save Profile</button>
                    </div>
                </div>
            </form>
        </div>
        <div class="col-sm-3"> </div>
        
    </div>


</div> <br><br><br>

<?php 
@include('footer.php');
?>



</body>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>

</html>