<?php @include('header.php'); ?>

<div class="main-content">
    <div class="wrapper">
        <h1>Update Category</h1><br><br>

        <?php 
        
            // Check Whether the Id is Set or Not.
            if(isset($_GET['id']))
            {
                // Get the Id and All Other Details.
                // echo "Getting the Data";
                $id = $_GET['id'];

                // Create SQL Query to Get All Other Details.
                $sql = "SELECT * FROM tbl_category WHERE Id = $id"; 

                // Execute the Query.
                $res = mysqli_query($conn, $sql);

                // Count the Rows to Check Whether the Id is Valid or Not.
                $count = mysqli_num_rows($res);

                if($count==1)
                {
                    // Get All the Data.
                    $row = mysqli_fetch_assoc($res);
                    $full_name = $row['Full_name'];
                    $age = $row['Age'];
                    $gender = $row['Gender'];
                    $occupation = $row['Occupation'];
                }
                else
                {
                    // Redirect to Manage Category.
                    $_SESSION['no-category-found'] = "<div class='error'> Category Not Found </div>";
                    header('location:'.SITEURL.'admin/manage-category.php');
                }
            }
            else
            {
                // Redirect to Manage Category Page
                header('location:'.SITEURL.'admin/manage-category.php');
            }
        
        ?>

        <form action="" method="POST" enctype="multipart/form-data">

            <table class="tbl-30">
                <tr>
                    <td>Full Name : </td>
                    <td>
                        <input type="text" name="name" value="<?php echo $full_name; ?>" placeholder="Enter your full name" required>
                    </td>
                </tr>

                <tr>
                    <td>Age : </td>
                    <td>
                        <input type="number" name="age" value="<?php echo $age; ?>" placeholder="Enter age" required>
                    </td>
                </tr>

                <tr>
                    <td>Gender : </td>
                    <td>
                        <input <?php if($gender=="Male"){echo "checked";} ?> type="radio" name="gender" value="Male"> Male

                        <input <?php if($gender=="Female"){echo "checked";} ?> type="radio" name="gender" value="Female"> Female

                        <input <?php if($gender=="Transgender"){echo "checked";} ?> type="radio" name="gender" value="Transgender"> Transgender
                    </td>
                </tr>

                <tr>
                    <td>Occupation : </td>
                    <td>
                        <input type="text" name="occupation" value="<?php echo $occupation; ?>" placeholder="Enter your occupation" required>
                    </td>
                </tr>

                

                <tr>
                    <td>
                        <input type="hidden" name="current_image" value="<?php echo $current_image; ?>">
                        <input type="hidden" name="id" value="<?php echo $id; ?>">
                        <input type="submit" name="submit" value="Update Category" class="btn-secondary">
                    </td>
                </tr>

            </table>
            
        </form>

        <?php

            if(isset($_POST['submit']))
            {
                // echo "Clicked";

                // 1. Get All the Values from our Form.
                $id = $_POST['id'];
                $full_name = $_POST['full_name'];
                $age = $_POST['age'];
                $gender = $_POST['gender'];
                $occupation = $_POST['occupation'];

                
                // 3. Update the Database.
                $sql2 = "UPDATE tbl_category SET
                    Full_name = '$full_name',
                    Age = '$age',
                    Gender = '$gender',
                    Occupation = '$occupation'
                    WHERE Id = $id
                ";

                // Execute the Query.
                $res2 = mysqli_query($conn, $sql2);

                // 4. Redirect to Manage Category with Message.

                // Check Whether Query Executed or Not.
                if($res2==TRUE)
                {
                    // Category Updated.
                    $_SESSION['update'] = "<div class='success'> Category Updated Successfully </div>";
                    header('location:'.SITEURL.'admin/manage-category.php');
                }
                else
                {
                    // Failed to Update Category.
                    $_SESSION['update'] = "<div class='error'> Failed to Update Category </div>";
                    header('location:'.SITEURL.'admin/manage-category.php');
                }

            }

        ?>


    </div>
</div>

<?php @include('footer.php'); ?>