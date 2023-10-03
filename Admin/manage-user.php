<?php @include('header.php'); ?>

<div class="main-content">
    <div class="wrapper">
        <h1>Manage User</h1><br>


        <?php
        
            if(isset($_SESSION['add']))
            {
                echo $_SESSION['add'];
                unset($_SESSION['add']);
            }

            if(isset($_SESSION['delete']))
            {
                echo $_SESSION['delete'];
                unset($_SESSION['delete']);
            }

            if(isset($_SESSION['upload']))
            {
                echo $_SESSION['upload'];
                unset($_SESSION['upload']);
            }

            if(isset($_SESSION['unauthorize']))
            {
                echo $_SESSION['unauthorize'];
                unset($_SESSION['unauthorize']);
            }

            if(isset($_SESSION['update']))
            {
                echo $_SESSION['update'];
                unset($_SESSION['update']);
            }

            if(isset($_SESSION['remove-failed']))
            {
                echo $_SESSION['remove-failed'];
                unset($_SESSION['remove-failed']);
            }
        
        ?><br><br><br>

        
        <!-- ------ Button to Add Food ------- -->

        <a href="<?php echo SITEURL; ?>admin/add-user.php" class="btn-primary">Add User</a>

        <br><br><br>

        <table class="tbl-full">
            <tr>
                <th>S. No. </th>
                <th>Full Name</th>
                <th>Username</th>
                <th>Password</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Age</th>
                <th>Gender</th>
                <th>Occupation</th>
                <th>Culture</th>
                <th>Address</th>
                <th>Preference</th>
            </tr>

            <?php
            
                // Create SQL Query to Get All the Food.
                $sql = "SELECT * FROM tbl_user";

                // Execute the Query.
                $res = mysqli_query($conn, $sql);

                // Count Rows to Check Whether we have Food or Not.
                $count = mysqli_num_rows($res);

                // Create Serial Number Variable and Set Default Value as 1.
                $sn = 1;

                if ($count>0)
                {
                    // We have Food in Database.
                    // Get the Foods from Database and Display.
                    while($row = mysqli_fetch_assoc($res))
                    {
                        // Get the Values from Individual Columns.
                        $id = $row['Id'];
                        $full_name = $row['Full_name'];
                        $username = $row['Username'];
                        $password = $row['Password'];
                        $email = $row['Email'];
                        $phone = $row['Phone'];
                        $age = $row['Age'];
                        $gender = $row['Gender'];
                        $occupation = $row['Occupation'];
                        $culture = $row['Culture'];
                        $address = $row['Address'];
                        $preference = $row['Preference'];

                        ?>

                            <tr>
                                <td><?php echo $sn++; ?></td>
                                <td><?php echo $full_name; ?></td>
                                <td><?php echo $username; ?></td>
                                <td><?php echo $password; ?></td>
                                <td><?php echo $email; ?></td>
                                <td><?php echo $phone; ?></td>
                                <td><?php echo $age; ?></td>
                                <td><?php echo $gender; ?></td>
                                <td><?php echo $occupation; ?></td>
                                <td><?php echo $culture; ?></td>
                                <td><?php echo $address; ?></td>
                                <td><?php echo $preference; ?></td>
                                <td>
                                    <a href="<?php echo SITEURL; ?>admin/update-user.php?id=<?php echo $id; ?>" class="btn-secondary">Update User</a>
                                    <a href="<?php echo SITEURL; ?>admin/delete-user.php?id=<?php echo $id; ?>&image_name=<?php echo $image_name; ?>" class="btn-danger">Delete User</a>
                                </td>
                            </tr>

                        <?php

                    }
                }
                else
                {
                    // Food Not Added in Database.
                    echo "<tr> <td colspan='7' class='error'> User Not Added Yet </td> </tr>";
                }

            ?>

            

           
        </table>
    </div>
</div>

<?php @include('footer.php'); ?>