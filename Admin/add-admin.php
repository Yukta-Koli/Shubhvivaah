<link rel="stylesheet" type="" href="../css/admin.css">

<?php 
    @include('../partials/header.php'); 
    @include('../config/constants.php');
?>


<div class="main-content">
    <div class="wrapper">
        <h1>Add Admin</h1><br><br><br>

        <?php
            if(isset($_SESSION['add']))    // Checking Whether the Session is Set or Not.
            {
                echo $_SESSION['add'];     // Display the Session Message if Set.
                unset($_SESSION['add']);   // Remove the Session Message.
            }
        ?>

        <form action="" method="POST">

            <table class="tbl-30">
                <tr>
                    <td>Full Name : </td>
                    <td>
                        <input type="text" name="full_name" placeholder="Enter Your Name">
                    </td>
                </tr>

                <tr>
                    <td>Username : </td>
                    <td>
                        <input type="text" name="username" placeholder="Your Username">
                    </td>
                </tr>

                <tr>
                    <td>Password : </td>
                    <td>
                        <input type="Password" name="password" placeholder="Your Password">
                    </td>
                </tr>

                <tr>
                    <td colspan="2">
                        <input type="submit" name="submit" value="Add Admin" class="btn-primary">
                    </td>
                </tr>
            </table>

        </form>
    </div>
</div>


<?php @include('footer.php'); ?>

<?php 
    // Process the value from Form and Save it in Database.
    // Check whether the submit button ic clicked or not.

    if(isset($_POST['submit'])){
        // Button Clicked
        // echo "Button Clicked";

        // 1. Get the Data from Form.
        $full_name = $_POST['full_name'];
        $username = $_POST['username'];
        $password = md5($_POST['password']);   //Password Encryption with MD5.

        // 2. SQL Query to Save the Data into Database.
        $sql = "INSERT INTO tbl_admin SET
            full_name = '$full_name',
            username = '$username',
            password = '$password'  
        ";
        
        // 3. Execute Query and Save Data in Database. 
        $res = mysqli_query($conn, $sql) or die(mysqli_error());

        // 4. Check Whether the (Query is Executed) / Data is inserted or not and display appropriate message.
        if($res==TRUE)
        {
            // Data Inserted.
            // echo "Data Inserted";

            // Create Session a Variable to Display a Messgae.
            $_SESSION['add'] = "<div class='success'> Admin Added Successfully </div>";

            // Redirect Page to Manage Admin.
            header("location:".SITEURL.'admin/manage-admin.php');
        }
        else
        {
            // Failed to Insert Data.
            // echo "Failed to Insert Data";

            // Create Session a Variable to Display a Messgae.
            $_SESSION['add'] = "<div class='error'> Failed to Add Admin </div>";

            // Redirect Page to Ad Admin.
            header("location:".SITEURL.'admin/add-admin.php');
        }
    }
?>