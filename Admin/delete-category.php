<?php 
    // Include Constants File.
    include('../Config/constants.php');

    // echo "Delete Page";
    // Check Whether the Id and Image_name Value is Set or Not.
    if(isset($_GET['id'])){

        // Get the Value and Delete.
        // echo "Get Value and Delete";
        $id = $_GET['id'];

        // Delete Data from Database.
        // SQL Query to Delete Data from Database.
        $sql = "DELETE FROM tbl_category WHERE Id=$id";

        // Execute the Query.
        $res = mysqli_query($conn, $sql);

        // Check Whether the Data is Deleted from Database or Not.
        if($res==TRUE)
        {
            // Set Success Message and Redirect.
            $_SESSION['delete'] = "<div class='success'> Category Deleted Successfully </div>";

            // Redirect to Manage Category.
            header('location:'.SITEURL.'admin/manage-category.php');
        }
        else
        {
            // Set Fail Message and Redirect.
            $_SESSION['delete'] = "<div class='error'> Failed to Delete Category </div>";

            // Redirect to Manage Category.
            header('location:'.SITEURL.'admin/manage-category.php');
        }


    }
    else
    {
        // Redirect to Manage Category Page.
        header('location:'.SITEURL.'admin/manage-category.php');
    }

?>