<?php include('partials/menu.php'); ?>

    <div class="main-content">
        <div class="wrapper">
            <h1>Update Order</h1><br><br>

            <?php
                // Check Whether Id is Checked or Not.
                if(isset($_GET['id']))
                {
                    // Get the Order Details.
                    $id = $_GET['id'];

                    // Get All the Details Based on this Id.
                    // SQL Query to get Order Details.
                    $sql = "SELECT * FROM tbl_order WHERE id = $id";

                    // Execute the Query.
                    $res = mysqli_query($conn, $sql);

                    // Count the Rows.
                    $count = mysqli_num_rows($res);

                    if($count==1)
                    {
                        // Details Available.
                        $row = mysqli_fetch_assoc($res);

                        $food = $row['Food'];
                        $price = $row['Price'];
                        $qty = $row['Quantity'];
                        $status = $row['Status'];
                        $customer_name = $row['Customer_Name'];
                        $customer_contact = $row['Customer_Contact'];
                        $customer_email = $row['Customer_Email'];
                        $customer_address = $row['Customer_Address'];
                    }
                    else
                    {
                        // Details Not Available.
                        // Redirect to Manage Order Page.
                        header('location:'.SITEURL.'admin/manage-order.php');
                    }
                }
                else
                {
                    // Redirect to Manage Order Page.
                    header('location:'.SITEURL.'admin/manage-order.php');
                }
            ?>

            <form action="" method="POST">

                <table class="tbl-30">
                    <tr>
                        <td>Food Name : </td>
                        <td><b><?php echo $food; ?></b></td>
                    </tr>

                    <tr>
                        <td>Price : </td>
                        <td>
                            <b> $ <?php echo $price; ?> </b>
                        </td>
                    </tr>

                    <tr>
                        <td>Quantity : </td>
                        <td>
                            <input type="number" name="qty" value="<?php echo $qty; ?>">
                        </td>
                    </tr>

                    <tr>
                        <td>Status : </td>
                        <td>
                            <select name="status">
                                <option <?php if($status == "Ordered") {echo "Selected";} ?> value="Ordered">Ordered</option>
                                <option <?php if($status == "On Delivery") {echo "Selected";} ?> value="On Delivery">On Delivery</option>
                                <option <?php if($status == "Delivered") {echo "Selected";} ?> value="Delivered">Delivered</option>
                                <option <?php if($status == "Cancelled") {echo "Selected";} ?> value="Cancelled">Cancelled</option>
                            </select>
                        </td>
                    </tr>

                    <tr>
                        <td>Customer Name : </td>
                        <td>
                            <input type="text" name="customer_name" value="<?php echo $customer_name; ?>">
                        </td>
                    </tr>

                    <tr>
                        <td>Customer Contact : </td>
                        <td>
                            <input type="text" name="customer_contact" value="<?php echo $customer_contact; ?>">
                        </td>
                    </tr>

                    <tr>
                        <td>Customer Email : </td>
                        <td>
                            <input type="text" name="customer_email" value="<?php echo $customer_email; ?>">
                        </td>
                    </tr>

                    <tr>
                        <td>Customer Address : </td>
                        <td>
                            <textarea name="customer_address" cols="30" rows="5"><?php echo $customer_address; ?></textarea>
                        </td>
                    </tr>

                    <tr>
                        <td colspan="2">
                            <input type="hidden" name="id" value="<?php echo $id; ?>">
                            <input type="hidden" name="price" value="<?php echo $price; ?>">
                            
                            <input type="submit" name="submit" value="Update Order" class="btn-secondary">  
                        </td>
                    </tr>

                </table>

            </form>

            <?php
            
                // Check whether Update Button is Clicked or Not.
                if(isset($_POST['submit']))
                {
                    // echo "Clicked";
                    // Get All the Values from Form.
                    $id = $_POST['id'];
                    $price = $_POST['price'];
                    $qty = $_POST['qty'];

                    $total = $price * $qty;

                    $status = $_POST['status'];

                    $customer_name = $_POST['customer_name'];
                    $customer_contact = $_POST['customer_contact'];
                    $customer_email = $_POST['customer_email'];
                    $customer_address = $_POST['customer_address'];

                    // Update the Values.
                    $sql2 = "UPDATE tbl_order SET
                        Quantity = $qty,
                        Total = $total,
                        Status = '$status',
                        Customer_Name = '$customer_name',
                        Customer_Contact = '$customer_contact',
                        Customer_Email = '$customer_email',
                        Customer_Address = '$customer_address'
                        WHERE Id = $id
                    ";

                    // Execute the Query.
                    $res2 = mysqli_query($conn, $sql2);

                    // Check Whether Order is Updated or Not.
                    // And Redirect to Manage Order Page with Message.
                    if($res2==TRUE)
                    {
                        // Order Updated.
                        $_SESSION['update'] = "<div class='success'> Order Updated Successfully </div>";
                        header('location:'.SITEURL.'admin/manage-order.php');
                    }
                    else
                    {
                        // Failed to Update Order.
                        $_SESSION['update'] = "<div class='error'> Failed to Update Order </div>";
                        header('location:'.SITEURL.'admin/manage-order.php');
                    }
                }
            
            ?>

        </div>
    </div>

<?php include('partials/footer.php'); ?>