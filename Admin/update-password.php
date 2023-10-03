<link rel="stylesheet" type="" href="../css/admin.css">

<?php 
    @include('../partials/header.php'); 
    @include('../config/constants.php');
?>

<div class="main-content">
    <div class="wrapper">
        <h1>Change Password</h1><br><br>

        <?php 
            if(isset($_GET['id']))
            {
                $id = $_GET['id'];
            }
        
        ?>

        <form action="" method="POST">
            <table class="tbl-30">
                <tr>
                    <td>Current Password : </td>
                    <td>
                        <input type="Password" name="current_password" placeholder="Current Password" required>
                    </td>
                </tr>

                <tr>
                    <td>New Password : </td>
                    <td>
                    <input type="Password" name="new_password" placeholder="New Password" required>
                    </td>
                </tr>

                <tr>
                    <td>Confirm Password : </td>
                    <td>
                    <input type="Password" name="confirm_password" placeholder="Confirm Password" required>
                    </td>
                </tr>

                <tr>
                    <td colspan="2">
                        <input type="hidden" name="id" value="<?php echo $id; ?>">
                        <input type="submit" name="submit" value="Change Password" class="btn-secondary">
                    </td>
                </tr>
            </table>
        </form>
    </div>
</div>


<?php 
    // Check Whether the Submit Button is Clicked or Not.
    if(isset($_POST['submit']))
    {
        // echo "Clicked";
        // 1. Get the Data from the Form.
        $id = $_POST['id'];
        $current_password = md5($_POST['current_password']);
        $new_password = md5($_POST['new_password']);
        $confirm_password = md5($_POST['confirm_password']);

        // 2. Check the user with Current ID and Current Password Exists or Not.
        $sql = "SELECT * FROM tbl_admin WHERE id=$id AND password='$current_password'";

        // Execute the Query
        $res = mysqli_query($conn, $sql);

        if($res==True)
        {
            // Check Whether the Data is Available or Not.
            $count = mysqli_num_rows($res);

            if($count==1)
            {
                // User Exists and Password can be Changed.
                // echo "User Found";

                // Check Whether the New Password and Confirm Password Match or Not.
                if($new_password==$confirm_password)
                {
                    // Update the Password.
                    $sql2 = "UPDATE tbl_admin SET
                        password = '$new_password'
                        WHERE id = $id
                    ";

                    // Execute the Query.
                    $res2 = mysqli_query($conn, $sql2);

                    // Check Whether the Query Executed or Not.
                    if($res2==TRUE)
                    {
                        // Display Source Message.
                        // Redirect to Manage Admin Page with Success Message.
                        $_SESSION['change-pwd'] = "<div class='success'> Password Changed Successfully </div>";

                        // Redirect the User.
                        header('location:'.SITEURL.'admin/manage-admin.php');
                    }
                    else
                    {
                        // Display Error Message.
                        // Redirect to Manage Admin Page with Error Message.
                        $_SESSION['change-pwd'] = "<div class='error'> Failed to Change the Password </div>";

                        // Redirect the User.
                        header('location:'.SITEURL.'admin/manage-admin.php');
                    }

                }
                else
                {
                    // Redirect to Manage Admin Page with Error Message.
                    $_SESSION['pwd-not-match'] = "<div class='error'> Password Did Not Match </div>";

                    // Redirect the User.
                    header('location:'.SITEURL.'admin/manage-admin.php');
                }
            }
            else
            {
                //  User does not Exist -> Set Message and Redirect.
                $_SESSION['user-not-found'] = "<div class='error'> User Not Found </div>";

                // Redirect the User.
                header('location:'.SITEURL.'admin/manage-admin.php');
            }
        }

        // 3. Check Whether the New Password and Confirm Password Match or Not.

        // 4. Change Password if all above is True.

    }

?>


<?php @include('footer.php'); ?>