<link rel="stylesheet" type="" href="../css/admin.css">

<?php 
    @include('./partials/header.php'); 
    @include('../config/constants.php');
?>


<div class="main-content">
    <div class="wrapper">
        <h1>Update Admin</h1><br><br>

        <?php 
            // 1. Get the Id of Selected Admin.
            $id = $_GET['id'];

            // 2. Create SQL Query to get the Details.
            $sql = "SELECT * FROM tbl_admin WHERE id = $id";

            //  Execute the Query.
            $res = mysqli_query($conn, $sql);

            // Check Whether the Query is Executed or Not.
            if($res==TRUE)
            {
                // Check Whether the Data is Available or Not.
                $count = mysqli_num_rows($res);

                // Check Whether we have Admin Data or Not.
                if($count==1)
                {
                    // Get the Details.
                    // echo "Admin Available";
                    $row = mysqli_fetch_assoc($res);

                    $full_name = $row['full_name'];
                    $username = $row['username'];
                    $password = $row['password'];
                }
                else
                {
                    // Redirect to Manage Admin Page.
                    header('location:'.SITEURL.'admin/manage-admin.php');
                }
            }

        ?>

        <form action="" method="POST">
            <table class="tbl-30">
                <tr>
                    <td>Full Name : </td>
                    <td>
                        <input type="text" name="full_name" value="<?php echo $full_name ?>">
                    </td>
                </tr>

                <tr>
                    <td>Username : </td>
                    <td>
                        <input type="text" name="username" value="<?php echo $username ?>">
                    </td>
                </tr>

                <tr>
                    <td>Password : </td>
                    <td>
                        <input type="password" name="password" value="<?php echo $password ?>">
                    </td>
                </tr>

                <tr>
                    <td colspan="2">
                        <input type="hidden" name="id" value="<?php echo $id; ?>">
                        <input type="submit" name="submit" value="Update Admin" class="btn-secondary">
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
        // echo "Button Clicked";
        // Get all the Values from Form to Update.
        $id = $_POST['id'];
        $full_name = $_POST['full_name'];
        $username = $_POST['username'];
        $password = $_POST['password'];

        // Create SQL Query to Update Admin.
        $sql = "UPDATE tbl_admin SET
        Full_name = '$full_name',
        Username = '$username',
        Password = '$password'
        WHERE id='$id'
        ";

        // Execute the Query
        $res = mysqli_query($conn, $sql);

        // Check Whether the Query Executed Successfully or Not.
        if($res==TRUE)
        {
            // Query Executed and Admin Updated.
            $_SESSION['update'] = "<div class='success'> Admin Updated Successfully </div>";

            // Redirect to Manage Admin Page.
            header('location:'.SITEURL.'admin/manage-admin.php');
        }
        else
        {
            // Failed to Update Admin.

             // Query Executed and Failed to Update Admin.
             $_SESSION['update'] = "<div class='error'> Failed to Update Admin </div>";

             // Redirect to Manage Admin Page.
             header('location:'.SITEURL.'admin/manage-admin.php');
        }
    }

?>




<?php @include('footer.php') ?>