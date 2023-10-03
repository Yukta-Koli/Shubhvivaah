<?php @include('header.php'); ?>

<div class="main-content">
    <div class="wrapper">
        <h1>Add Category</h1><br><br>

        <?php
            if(isset($_SESSION['add']))
            {
                echo $_SESSION['add'];
                unset($_SESSION['add']);
            }

            if(isset($_SESSION['upload']))
            {
                echo $_SESSION['upload'];
                unset($_SESSION['upload']);
            }
        
        ?><br><br>

        <!-- ---------------- Add Category Form Starts ------------- -->
        <!-- enctype allows to upload image or file in form -->
        <form action="" method="POST" enctype="multipart/form-data">  

            <table class="tbl-30">
                <tr>
                    <td> Full Name : </td>
                    <td>
                        <input type="text" name="full_name" placeholder="Enter your full name" required>
                    </td>
                </tr>

                <tr>
                    <td> Age : </td>
                    <td>
                        <input type="number" placeholder="Enter Age" required min="1" max="90"> 
                    </td>
                </tr>

                <tr>
                   <td> Gender : </td> 
                   <td>
                       <input type="radio" name="gender" value="Male" required>
                       <input type="radio" name="gender" value="Female" required>
                       <input type="radio" name="gender" value="Transgender" required>
                   </td>
                </tr>

                <tr>
                    <td> Occupation : </td>
                    <td>
                       <input type="text" name="occupation" placeholder="Enter your occupation" required>
                   </td>
                </tr>

                <tr>
                    <td colspan="2">
                        <input type="submit" name="submit" value="Add Category" class="btn-secondary">
                    </td>
                </tr>
            </table>

        </form>


        <!-- ---------------- Add Category Form Ends ------------- -->

       <?php

            // Check Whether the Submit Button is Clicked or Not.
            if(isset($_POST['submit']))
            {
                // echo "Clicked";

                // 1. Get the Value from Category Form.
                $full_name = $_POST['full_name'];
                $age = $_POST['age'];

                // For Radio Input Type Check Wether the Button is Selected or Not.
                if(isset($_POST['gender']))
                {
                    // Get the Value from Form.
                    $gender = $_POST['gender'];
                }
                else
                {
                    // Set the Default Value.
                    $gender = "No";
                }
                
                $occupation = $_POST['occupation'];
                

                // 2. Create SQL Query to Insert Category into Database.
                $sql = "INSERT INTO tbl_category SET
                    Id = '$id',
                    Full_name = '$full_name',
                    Age = '$age',
                    Gender = '$gender',
                    Occupation='$occupation'

                ";

                // 3. Execute the Query and Save in Database.
                $res = mysqli_query($conn, $sql);

                // 4. Check Wether the Query is Executed or Not and Data Added or Not.
                if($res==TRUE)
                {
                    // Query Executed and Category Added.
                    $_SESSION['add'] = "<div class='success'> Category Added Successfully </div>";

                    // Redirect to Manage Category Page.
                    header('location:'.SITEURL.'admin/manage-category.php');
                }
                else
                {
                    // Failed to Add Category.
                    $_SESSION['add'] = "<div class='error'> Failed to Add Category </div>";

                    // Redirect to Manage Category Page.
                    header('location:'.SITEURL.'admin/manage-category.php');
                }
            }
       
       ?> 

    </div>
</div>



<?php @include('footer.php'); ?>