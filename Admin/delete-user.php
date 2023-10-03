<?php 
    // Include Constants File.
    include('../Config/constants.php');

    

        // Delete Data from Database.
        // SQL Query to Delete Data from Database.
        $sql = "DELETE FROM tbl_user WHERE Id=$id";

        // Execute the Query.
        $res = mysqli_query($conn, $sql);

        // Check Whether the Data is Deleted from Database or Not.
        if($res==TRUE)
        {
            // Set Success Message and Redirect.
            $_SESSION['delete'] = "<div class='success'> User Deleted Successfully </div>";

            // Redirect to Manage Category.
            header('location:'.SITEURL.'admin/manage-user.php');
        }
        else
        {
            // Set Fail Message and Redirect.
            $_SESSION['delete'] = "<div class='error'> Failed to Delete Category </div>";

            // Redirect to Manage Category.
            header('location:'.SITEURL.'admin/manage-user.php');
        }


?>