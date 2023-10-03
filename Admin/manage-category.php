<?php @include('header.php'); ?>

<div class="main-content">
    <div class="wrapper">
        <h1>Manage Category</h1><br>

        <?php
            if(isset($_SESSION['add']))
            {
                echo $_SESSION['add'];
                unset($_SESSION['add']);
            }

            if(isset($_SESSION['remove']))
            {
                echo $_SESSION['remove'];
                unset($_SESSION['remove']);
            }

            if(isset($_SESSION['delete']))
            {
                echo $_SESSION['delete'];
                unset($_SESSION['delete']);
            }

            if(isset($_SESSION['no-category-found']))
            {
                echo $_SESSION['no-category-found'];
                unset($_SESSION['no-category-found']);
            }

            if(isset($_SESSION['update']))
            {
                echo $_SESSION['update'];
                unset($_SESSION['update']);
            }

            if(isset($_SESSION['failed-remove']))
            {
                echo $_SESSION['failed-remove'];
                unset($_SESSION['failed-remove']);
            }
        
        ?><br><br><br>


        <!-- ------ Button to Add Category ------- -->

        <a href="<?php echo SITEURL; ?>admin/add-category.php" class="btn-primary">Add Category</a>

        <br><br><br>

        <table class="tbl-full">
            <tr>
                <th>S. No. </th>
                <th>Full_name</th>
                <th>Age</th>
                <th>Gender</th>
                <th>Occupation</th>
            </tr>

            <?php
                // Query to Get all Categories from Database.
                $sql = "SELECT * FROM tbl_category";

                // Execute Query.
                $res = mysqli_query($conn, $sql);

                // Count Rows.
                $count = mysqli_num_rows($res);

                // Create Serial Number Variable and Assign Value as 1.
                $sn=1;

                // Check Whether We have Data in Database or Not.
                if($count>0)
                {
                    // We have Data in Database.
                    // Get the Data and Display
                    while($row=mysqli_fetch_assoc($res))
                    {
                        $id = $row['Id'];
                        $full_name = $row['Full_name'];
                        $age = $row['Age'];
                        $gender = $row['Gender'];
                        $occupation = $row['Occupation'];

                        ?>

                        <tr>
                            <td><?php echo $sn++; ?></td>
                            <td><?php echo $full_name; ?></td>
                            <td><?php echo $age; ?></td>
                            <td><?php echo $gender; ?></td>
                            <td><?php echo $occupation; ?></td>
                            <td>
                                <a href="<?php echo SITEURL; ?>admin/update-category.php?id=<?php echo $id; ?>" class="btn-secondary">Update Category</a>
                                <a href="<?php echo SITEURL; ?>admin/delete-category.php?id=<?php echo $id; ?>" class="btn-danger">Delete Category</a>
                            </td>
                        </tr>

                        <?php
                    }
                }
                else
                {
                    // We Don't have Data in Database.
                    // We will Display the Message Inside Table.
                    ?>

                    <tr>
                        <td colspan="6"><div class="error"> No Category Added </div></td>
                    </tr>

                    <?php
                }
            
            ?>

            

        </table>
    </div>
</div>

<?php @include('footer.php'); ?>