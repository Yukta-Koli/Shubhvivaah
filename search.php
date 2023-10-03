<?php include('home.php'); ?>



    <!-- Food Search Section Starts Here -->
    <section class="food-search text-center">
        <div class="container">

            <?php
            
                // Get the Search Keyword.
                // $search = $_POST['search'];
                $search = mysqli_real_escape_string($conn, $_POST['search']);

            ?>
            
            <h2 style="color: #6F1E51;">Profiles on your search <a href="<?php echo SITEURL; ?>visit.php? id=<?php echo $id; ?>" class="text-color text-white">"<?php echo $search; ?>"</a></h2>

        </div>
    </section>
    <!-- Food Search Section Ends Here -->



    <!-- Food Menu Section Starts Here -->
    <section class="food-menu">
        <div class="container">
            <h2 class="text-center">Profiles</h2>

            <?php

                // SQL Query to get Food on Search Keyword.

                // $search = burger '; DROP database name;
                // "SELECT * FROM tbl_food WHERE Title LIKE '%burger'%' OR gender LIKE '%burger'%'; 
                $sql = "SELECT * FROM tbl_user WHERE Title LIKE '%$search%' OR gender LIKE '%$search%'"; 

                // Execute the Query.
                $res = mysqli_query($conn, $sql);

                // Count the Rows.
                $count = mysqli_num_rows($res);

                // Check Whether Food Available or Not.
                if($count>0)
                {
                    // Food Available.
                    while($row = mysqli_fetch_assoc($res))
                    {
                        // Get the Details.
                        $id = $row['id'];
                        $title = $row['ful_name'];
                        $age = $row['age'];
                        $gender = $row['gender'];
                        $occupation = $row['occupation'];

                        ?>
                            <div class="food-menu-box">
                                <div class="food-menu-img">

                                    <?php
                                    
                                        // Check Whether Image Name is Available or Not.
                                        if($occupation=="")
                                        {
                                            // Image Not Available.
                                            echo "<div class='error'> Image Not Available </div>";
                                        }
                                        else
                                        {
                                            // Image Available.
                                            ?>
                                                <img src="<?php echo SITEURL; ?>images/food/<?php echo $occupation; ?>" alt="Chicke Hawain Pizza" class="img-responsive img-curve">
                                            <?php
                                        }
                                    
                                    ?>

                                </div>

                                <div class="food-menu-desc">
                                    <h4><?php echo $full_name; ?></h4>
                                    <p class="food-price">₹<?php echo $age; ?></p>
                                    <p class="food-detail">
                                    <?php echo $gender; ?>
                                    </p>
                                    <br>

                                    <a href="<?php echo SITEURL; ?>contact.php?id=<?php echo $id; ?>" class="btn btn-primary">Order Now</a>
                                </div>
                            </div>
                        <?php
                    }
                }
                else
                {
                    // Food Not Available.
                    echo "<div class='error'> User Not Found </div>";
                }

            ?>

            


            <div class="clearfix"></div>

            

        </div>

    </section>
    <!-- fOOD Menu Section Ends Here -->

    


<?php include('footer.php'); ?>