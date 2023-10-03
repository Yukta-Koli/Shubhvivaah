<?php @include('header.php'); ?>

<?php
    // Check Whether Id is Set or Not.
    if(isset($_GET['id']))
    {
        // Get all the Details.
        $id = $_GET['id'];

        // SQL Query to get the Selected Food.
        $sql2 = "SELECT * FROM tbl_user WHERE id=$id";

        // Execute the Query.
        $res2 = mysqli_query($conn, $sql2);

        // Get the Value based on Query Executed.
        $row2 = mysqli_fetch_assoc($res2);

        // Get the Individual Values of Selected Food.
        $full_name = $row2['Full_name'];
        $username = $row2['Username'];
        $password = $row2['Password'];
        $email = $row2['Email'];
        $phone = $row2['Phone'];
        $age = $row2['Age'];
        $gender = $row2['Gender'];
        $occupation = $row2['Occupation'];
        $culture = $row2['Culture'];
        $address = $row2['Address'];
        $preference = $row2['Preference'];
    }
    else
    {
        // Redirect to Manage Food Page.
        header('location:'.SITEURL.'admin/manage-user.php');
    }

?>

<div class="main-content">
    <div class="wrapper">
        <h1>Update User</h1><br><br>

        <form action="" method="POST" enctype="multipart/form-data">

        <table class="tbl-30">

            <tr>
                <td> Full Name : </td>
                <td>
                    <input type="text" name="full_name" value="<?php echo $full_name; ?>" required>
                </td>
            </tr>

            <tr>
                <td> Username : </td>
                <td>
                    <input type="text" name="username" value="<?php echo $username; ?>" required>
                </td>
            </tr>

            <tr>
                <td> Password : </td>
                <td>
                    <input type="number" name="password" value="<?php echo $password; ?>" required>
                </td>
            </tr>

            <tr>
                <td> Email : </td>
                <td>
                    <input type="text" name="email" value="<?php echo $email; ?>" required>
                </td>
            </tr>

            <tr>
                <td> Phone : </td>
                <td>
                    <input type="tel" name="phone" value="<?php echo $phone; ?>" required>
                </td>
            </tr>

            <tr>
                <td> Age : </td>
                <td>
                    <input type="number" name="age" value="<?php echo $age; ?>" required>
                </td>
            </tr>

            <tr>
                <td> Gender : </td>
                <td>
                    <input <?php if($gender=="Male") {echo "checked";} ?> type="radio" name="gender" value="Male"> Male
                    <input <?php if($featured=="Female") {echo "checked";} ?> type="radio" name="gender" value="Female"> Female
                    <input <?php if($featured=="Transgender") {echo "checked";} ?> type="radio" name="gender" value="Transgender"> Transgender
                </td>
            </tr>

            <tr>
                <td> Occupation : </td>
                <td>
                    <input type="text" name="occupation" value="<?php echo $occupation; ?>" required>
                </td>
            </tr>

            <tr>
                <td> Religion : </td>
                <td>
                    <select name="culture" id="">
                        <option <?php if($culture=="Hindu") {echo "checked";} ?> name="culture" value="Hindu" required> Hindu </option>
                        <option <?php if($culture=="Buddha") {echo "checked";} ?> name="culture" value="Buddha" required> Buddha </option>
                        <option <?php if($culture=="Jain") {echo "checked";} ?> name="culture" value="Jain" required> Jain </option>
                        <option <?php if($culture=="Christian") {echo "checked";} ?> name="culture" value="Christian" required> Christian </option>
                        <option <?php if($culture=="Sindhu") {echo "checked";} ?> name="culture" value="Sindhu" required> Sindhu </option>
                        <option <?php if($culture=="Muslim") {echo "checked";} ?> name="culture" value="Muslim" required> Muslim </option>
                        <option <?php if($culture=="Gujarati") {echo "checked";} ?> name="culture" value="Gujarati" required> Gujarati </option>
                        <option <?php if($culture=="Tamil") {echo "checked";} ?> name="culture" value="Tamil" required> Tamil </option>
                        <option <?php if($culture=="Sikh") {echo "checked";} ?> name="culture" value="Sikh" required> Sikh </option>
                        <option <?php if($culture=="Marwadi") {echo "checked";} ?> name="culture" value="Marwadi" required> Marwadi </option>
                    </select>
                </td>
            </tr>

            <tr>
                <td> Address : </td>
                <td>
                    <textarea name="address" cols="30" rows="5"><?php echo $address; ?></textarea>
                </td>
            </tr>

            <tr>
                <td> Preference : </td>
                <td>
                    <textarea name="preference" cols="30" rows="5"><?php echo $preference; ?></textarea>
                </td>
            </tr>

            
        </table>

        </form>

        <?php
        
            if(isset($_POST['submit']))
            {
                // echo "Button Clicked";

                // 1. Get all the Details from the Form.
                $id = $_POST['id'];
                $full_name = $_POST['full_name'];
                $username = $_POST['username'];
                $password = $_POST['password'];
                $email = $_POST['email'];
                $phone = $_POST['phone'];
                $age = $_POST['age'];
                $gender = $_POST['gender'];
                $occupation = $_POST['occupation'];
                $culture = $_POST['culture'];
                $address = $_POST['address'];
                $preference = $_POST['preference'];


                // 4. Update the Food in Database.
                $sql3 = "UPDATE tbl_user SET
                    Full_name = '$full_name',
                    username = '$username',
                    Password = $password,
                    Email = '$email',
                    Phone = '$phone',
                    Age = '$age',
                    Gender = '$gender',
                    Occupation = '$occupation',
                    Culture = '$culture',
                    Address='$address',
                    Preference= '$preference'
                    WHERE Id = $id
                ";

                // 5. Redirect to Manage Food with Session Message.
                // Execute the SQL Query.
                $res3 = mysqli_query($conn, $sql3);

                // Check Whether the Query is Executed or Not.
                if($res3==TRUE)
                {
                    // Query Executed and Food Updated. 
                    $_SESSION['update'] = "<div class='success'> User Updated Successfully </div>";
                    header('location:'.SITEURL.'admin/manage-user.php');
                }
                else
                {
                    // Failed to Update Food.
                    $_SESSION['update'] = "<div class='error'> Failed to Update User </div>";
                    header('location:'.SITEURL.'admin/manage-user.php');
                }

                
            }
        
        ?>


    </div>
</div>

<?php @include('footer.php'); ?>