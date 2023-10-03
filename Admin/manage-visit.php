<?php include('partials/menu.php'); ?>

<div class="main-content">
    <div class="wrapper">
        <h1>Manage Order</h1><br>

        <?php
            if(isset($_SESSION['update']))
            {
                echo $_SESSION['update'];
                unset($_SESSION['update']);
            }
        ?><br><br><br>

        <table class="tbl-full">
            <tr>
                <th>S. No. </th>
                <th>Food</th>
                <th>Price</th>
                <th>Quantity</th>
                <th>Total</th>
                <th>Order Date</th>
                <th>Status</th>
                <th>Customer Name</th>
                <th>Customer Contact</th>
                <th>Email</th>
                <th>Address</th>
                <th>Actions</th>
            </tr>

            <?php
                // Get All the Orders from the Database.
                // Display the Latest Order at First.
                $sql = "SELECT * FROM tbl_order ORDER BY id DESC";

                // Execute the Query.
                $res = mysqli_query($conn, $sql);

                // Count the Rows.
                $count= mysqli_num_rows($res);

                // Create a Serial Number and Set its Initial Value as 1.
                $sn = 1;

                if($count>0)
                {
                    // Order Available.
                    while($row=mysqli_fetch_assoc($res))
                    {
                        // Get All the Order Details.
                        $id = $row['Id'];
                        $food = $row['Food'];
                        $price = $row['Price'];
                        $qty = $row['Quantity'];
                        $total = $row['Total'];
                        $order_date = $row['Order_date'];
                        $status = $row['Status'];
                        $customer_name = $row['Customer_Name'];
                        $customer_contact = $row['Customer_Contact'];
                        $customer_email = $row['Customer_Email'];
                        $customer_address = $row['Customer_Address'];

                        ?>

                            <tr>
                                <td><?php echo $sn++; ?></td>
                                <td><?php echo $food; ?></td>
                                <td><?php echo $price; ?></td>
                                <td><?php echo $qty; ?></td>
                                <td><?php echo $total; ?></td>
                                <td><?php echo $order_date; ?></td>
                                
                                <td>
                                    <?php

                                        // Ordered / On Delivery / Delivered / Cancelled.
                                        if($status == "Ordered")
                                        {
                                            echo "<label><b>$status</b></label>";
                                        }
                                        elseif($status == "On Delivery")
                                        {
                                            echo "<label style='color: orange;'><b>$status</b></label>";
                                        }
                                        elseif($status == "Delivered")
                                        {
                                            echo "<label style='color: green;'><b>$status</b></label>";
                                        }
                                        elseif($status == "Cancelled")
                                        {
                                            echo "<label style='color: red;'><b>$status</b></label>";
                                        }

                                    ?>
                                </td>

                                <td><?php echo $customer_name; ?></td>
                                <td><?php echo $customer_contact; ?></td>
                                <td><?php echo $customer_email; ?></td>
                                <td><?php echo $customer_address; ?></td>
                                <td>
                                    <a href="<?php echo SITEURL; ?>admin/update-order.php?id=<?php echo $id; ?>" class="btn-secondary">Update Order</a>
                                </td>
                            </tr>

                        <?php

                    }
                }
                else
                {
                    // Order Not Available.
                    echo "<div colspan='12' class='error'> Order Not Available </div>";
                }
            ?>

            

            
        </table>
    </div>
</div>

<?php include('partials/footer.php'); ?>