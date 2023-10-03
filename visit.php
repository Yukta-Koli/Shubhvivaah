<?php include('partials-front/menu.php'); ?>


    <?php
        if(isset($_SESSION['order']))
        {
            echo $_SESSION['order'];
            unset($_SESSION['order']);
        }
    ?><br><br><br><br>




    <?php
    
        // Check Whether Food Id is Checked or Not.
        if(isset($_GET['food_id']))
        {
            // Get the Food Id and Details of the Selected Food.
            $food_id = $_GET['food_id'];

            // Get the Details of the Selected Food.
            $sql = "SELECT * FROM tbl_food WHERE id = $food_id";

            // Execute the Query.
            $res = mysqli_query($conn, $sql);

            // Count the Rows.
            $count = mysqli_num_rows($res);

            if($count==1)
            {
                // We have Data.
                // Get the Data from the Database.
                $row = mysqli_fetch_assoc($res);

                $title = $row['Title'];
                $price = $row['Price'];
                $image_name = $row['Image_name'];

            }
            else
            {
                // Food Not Available.
                // Redirect to the Home Page.
                header('location:'.SITEURL);
            }
        }
        else
        {
            // Redirect to Home Page.
            header('location:'.SITEURL);
        }

    ?>



    <!-- --------------------- Food Search Section Starts Here --------------------- -->
    <section class="food-search-sec">
        <div class="container-2">
            
            <h2 class="text-center text-white">Fill this form to confirm your order.</h2>

            <form action="" method="POST" class="order">
                <fieldset>
                    <legend>Selected Food</legend>

                    <div class="food-menu-img">

                        <?php
                        
                            // Check Whether theImage is Available or Not.
                            if($image_name=="")
                            {
                                // Image Not Available.
                                echo "<div class='error'> Image Not Available </div>";
                            }
                            else
                            {
                                // Image is Available.
                                ?>
                                    <img src="<?php echo SITEURL; ?>images/food/<?php echo $image_name; ?>" alt="Chicke Hawain Pizza" class="img-responsive img-curve">
                                <?php
                            }
                        
                        ?>

                        
                    </div>
    
                    <div class="food-menu-desc">
                        <h3><?php echo $title; ?></h3>
                        <input type="hidden" name="food" value="<?php echo $title; ?>">

                        <p class="food-price">₹<?php echo $price; ?></p>
                        <input type="hidden" name="price" value="<?php echo $price; ?>">

                        <div class="order-label">Quantity</div>
                        <input type="number" name="qty" class="input-responsive" value="1" required>
                        
                    </div>

                </fieldset>
                
                <fieldset>
                    <legend>Delivery Details</legend>
                    <div class="order-label">Full Name</div>
                    <input type="text" name="full-name" placeholder="E.g. Yukta Koli" class="input-responsive" required>

                    <div class="order-label">Phone Number</div>
                    <input type="tel" name="contact" placeholder="E.g. 9702xxxxxx" class="input-responsive" required>

                    <div class="order-label">Email</div>
                    <input type="email" name="email" placeholder="E.g. wowFood@gmail.com" class="input-responsive" required>

                    <div class="order-label">Address</div>
                    <textarea name="address" rows="10" placeholder="E.g. Street, City, State, Pincode" class="input-responsive" required></textarea>

                    <input type="submit" name="submit" value="Confirm Order" class="btn btn-primary">
                </fieldset>

            </form>

            <?php
                ob_start();
                // Check Whether Submit Button is Clicked or Not.
                if(isset($_POST['submit']))
                {
                    // Get All the Details from the Form.
                    $food = $_POST['food'];
                    $price = $_POST['price'];
                    $qty = $_POST['qty'];

                    $total = $price * $qty;  // Total = Price x Quantity.

                    $order_date = date("Y-m-d h:i:sa");  //Order Date.

                    $status = "Ordered";    // Ordered / On Delivery / Delivered / Cancelled.

                    $customer_name = $_POST['full-name'];
                    $customer_contact = $_POST['contact'];
                    $customer_email = $_POST['email'];
                    $customer_address = $_POST['address'];

                    // Save the Order in Database.
                    // Create SQL to Save the Data.
                    $sql2 = "INSERT INTO tbl_order SET
                        Food = '$food',
                        Price = $price,
                        Quantity = $qty,
                        Total = $total,
                        Order_date = '$order_date',
                        Status = '$status',
                        Customer_Name = '$customer_name',
                        Customer_Contact = '$customer_contact',
                        Customer_Email = '$customer_email',
                        Customer_Address = '$customer_address'
                    ";

                    // echo $sql2;
                    // die();

                    // Execute the Query.
                    $res2 = mysqli_query($conn, $sql2);

                    // Check Whether Query Executed Successfully or Not.
                    if($res2==TRUE)
                    {
                        // Query Executed and Order Saved.
                        $_SESSION['order'] = "<div class='success text-center'> Food Ordered Successfully </div>";
                        header('location:'.SITEURL);
                    }
                    else
                    {
                        // Failed to Save Order.
                        $_SESSION['order'] = "<div class='error text-center'> Failed to Order Food </div>";
                        header('location:'.SITEURL);
                    }
                }
                
                ob_end_clean();
            ?>

        </div>
    </section>
    <!-- --------------------- Food Search Section Ends Here --------------------- -->



<?php include('partials-front/footer.php'); ?>