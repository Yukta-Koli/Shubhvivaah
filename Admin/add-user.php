<?php @include('header.php'); ?>

<div class="main-content">
    <div class="wrapper">
        <h1>Add User</h1><br><br>

        <?php
        
            if(isset($_SESSION['upload']))
            {
                echo $_SESSION['upload'];
                unset($_SESSION['upload']);
            }
        
        ?>


        <form action="" method="POST" enctype="multipart/form-data">

            <table class="tbl-30">

                <tr>
                   <td> Full Name : </td> 
                   <td>
                       <input type="text" name="full_name" placeholder="Enter your full name" required>
                   </td>
                </tr>

                <tr>
                   <td> Username : </td> 
                   <td>
                       <input type="text" name="username" placeholder="Enter your username" required>
                   </td>
                </tr>

                <tr>
                   <td> Password : </td> 
                   <td>
                       <input type="password" name="password" placeholder="Enter password" required>
                   </td>
                </tr>

                <tr>
                   <td> Email : </td> 
                   <td>
                       <input type="email" name="email" placeholder="Enter your email" required>
                   </td>
                </tr>

                <tr>
                   <td> Phone : </td> 
                   <td>
                       <input type="tel" name="phone" placeholder="Enter your contact number" required>
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
                <td> Religion : </td> 
                   <td>
                        <select name="caste" id="">
                            <option value="Hindu"> Hindu </option>
                            <option value="Buddha"> Buddha </option>
                            <option value="Jain"> Jain </option>
                            <option value="Christian"> Christian </option>
                            <option value="Sindhu"> Sindhu </option>
                            <option value="Muslim"> Muslim </option>
                            <option value="Gujarati"> Gujarati </option>
                            <option value="Tamil"> Tamil </option>
                            <option value="Sikh"> Sikh </option>
                            <option value="Marwadi"> Marwadi </option>
                        </select>
                       <!--<input type="radio" name="culture" value="Assamese" required>
                       <input type="radio" name="culture" value="Bengali" required>
                       <input type="radio" name="culture" value="Bhori" required>
                       <input type="radio" name="culture" value="Bihari" required>
                       <input type="radio" name="culture" value="Female" required>
                       <input type="radio" name="culture" value="Chattisgarhi" required>
                       <input type="radio" name="culture" value="East Indian" required>
                       <input type="radio" name="culture" value="Garhwali" required>
                       <input type="radio" name="culture" value="Goan" required>
                       <input type="radio" name="culture" value="Gujarati" required>
                       <input type="radio" name="culture" value="Gujjar" required>
                       <input type="radio" name="culture" value="Haryanvi" required>
                       <input type="radio" name="culture" value="Hyderabadi" required>
                       <input type="radio" name="culture" value="Islamic" required>
                       <input type="radio" name="culture" value="Jain" required>
                       <input type="radio" name="culture" value="Kannada" required>
                       <input type="radio" name="culture" value="Kashmiri" required>
                       <input type="radio" name="culture" value="Kokani" required>
                       <input type="radio" name="culture" value="Kumauni" required>
                       <input type="radio" name="culture" value="Kumouni" required>
                       <input type="radio" name="culture" value="Lakhnow" required>
                       <input type="radio" name="culture" value="MP" required>
                       <input type="radio" name="culture" value="Maharashtrian" required>
                       <input type="radio" name="culture" value="Mamun" required>
                       <input type="radio" name="culture" value="Marathi" required>
                       <input type="radio" name="culture" value="Mixed" required>
                       <input type="radio" name="culture" value="Nepali" required>
                       <input type="radio" name="culture" value="North Indian" required>
                       <input type="radio" name="culture" value="Oriya" required>
                       <input type="radio" name="culture" value="Other" required>
                       <input type="radio" name="culture" value="Pakistani" required>
                       <input type="radio" name="culture" value="Punjabi" required>
                       <input type="radio" name="culture" value="Rajasthani" required>
                       <input type="radio" name="culture" value="Sindhi (Indian)" required>
                       <input type="radio" name="culture" value="Sindhi (Pak)" required>
                       <input type="radio" name="culture" value="Sinhala" required>
                       <input type="radio" name="culture" value="South Indian" required>
                       <input type="radio" name="culture" value="UP" required>
                       <input type="radio" name="culture" value="Zoroastrian Irani" required>-->
                   </td>
                </tr>

                <tr>
                    <td> Address : </td>
                    <td>
                        <textarea name="address" cols="30" rows="5" placeholder="Write your address"></textarea>
                    </td>
                </tr>


                <tr>
                    <td>Preference : </td>
                    <td>
                        <select name="preference">

                            <?php
                                // Create php code to Display Categories from Database.

                                // 1. Create SQL to get All Active Categories from Database.
                                $sql = "SELECT * FROM tbl_category WHERE active = 'Yes'";

                                // Executing Query.
                                $res = mysqli_query($conn, $sql);

                                // Count Rows to Check Whether we have Categories or Not.
                                $count = mysqli_num_rows($res);

                                // If Count is Greater then Zero, we have Categories Else we don't have Categories.
                                if($count>0)
                                {
                                    // We have Categories.
                                    while($row = mysqli_fetch_assoc($res))
                                    {
                                        // Get the Details of Category.
                                        $id = $row['Id'];
                                        $title = $row['Title'];
                                        ?>
                                        
                                        <option value="<?php echo $id; ?>"><?php echo $title; ?></option>

                                        <?php
                                    }
                                }
                                else
                                {
                                    // We don't have Category.
                                    ?>
                                    <option value="0">No Category Found</option>
                                    <?php
                                }

                                // 2. Display on Dropdown.

                            ?>

                        </select>
                    </td>
                </tr>

                <tr>
                    <td colspan="2">
                        <input type="submit" name="submit" value="Add User" class="btn-secondary">
                    </td>
                </tr>


            </table>
        </form>

        
        <?php
        
            // Check Whether the Button is Clicked or Not.
            if(isset($_POST['submit']))
            {
                // Add the Food in Database.
                // echo "Clicked";

                // 1. Get the Data from Form.
                $full_name = $_POST['full_name'];
                $username = $_POST['username'];
                $password = $_POST['password'];
                $email = $_POST['email'];
                $phone = $_POST['phone'];
                $age = $_POST['age'];
                
                // Check Whether Radio Button for Featured and Active are Checked or Not.
                if(isset($_POST['gender']))
                {
                    $gender = $_POST['gender'];
                }
                else
                {
                    $gender = "No";  // Setting the Default Value.
                }

                $occupation = $_POST['occupation'];

                if(isset($_POST['culture']))
                {
                    $culture = $_POST['culture'];
                }
                else
                {
                    $culture = "No";    // Setting the Default Value.
                }

                $address = $_POST['address'];

                if(isset($_POST['prefernce']))
                {
                    $preference = $_POST['preference'];
                }
                else
                {
                    $preference = "No";    // Setting the Default Value.
                }
            
                // Insert into Database.

                // Create a SQL Query to Save or Add Food.
                $sql2 = "INSERT INTO tbl_user SET 
                    Full_name = '$full_name',
                    Username = '$username',
                    Password = '$password',
                    Email = '$email',
                    Phone = '$phone',
                    Age = '$age',
                    Gender = '$gender',
                    Occupation = '$occupation',
                    Culture = '$culture',
                    Address = '$address',
                    Preference = '$preference'
                ";    // For string values give single quote '' compulsorily & for numerical values no need.

                // Execute the Query.
                $res2 = mysqli_query($conn, $sql2);


                // 4. Redirect with Message to Manage Food Page.

                // Check Whether Data is Inserted or Not.
                if($res2==TRUE)
                {
                    // Data Inserted Successfully.
                    $_SESSION['add'] = "<div class='success'> User Added Successfully </div>";
                    header('location:'.SITEURL.'admin/manage-user.php');
                }
                else
                {
                    // Failed to Insert Data.
                    $_SESSION['add'] = "<div class='error'> Failed to Add User.. </div>";
                    header('location:'.SITEURL.'admin/manage-user.php');
                }

            }
        
        ?>



    </div>
</div>

<?php include('partials/footer.php'); ?>