<?php 

    // Include constants.php file here.
    include('../Config/constants.php');


    // 1. Get the Id of the Admin to be Deleted.
    $id = $_GET['id'];


    // 2. Create SQL Query to Delete Admin.
    $sql = "DELETE FROM tbl_admin WHERE id = $id";

    // Execute the Query.
    $res = mysqli_query($conn, $sql);

    // Check Whether the Query Executed Successfully or Not.
    if($res==True)
    {
        // Query Executed Successfully and Admin Deleted.
        // echo "Admin Deleted";

        // Create Session Variable to Display Message.
        $_SESSION['delete'] = "<div class='success'> Admin Deleted Successfully. </div>";

        // Redirect to Manage Admin Page.
        header('location:'.SITEURL.'admin/manage-admin.php');
    }
    else
    {{
        // Failed to Delete Admin.
        // echo "Failed to Delete Admin";

        $_SESSION['delete'] = "<div class='error'> Failed to Delete Admin. Try Again Later. </div>";
        header('location:'.SITEURL.'admin/manage-admin.php');
    }}

    // 3. Redirect to Manage Admin Page with Message (Success / Error).


?>