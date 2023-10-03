<?php include('partials-front/menu.php'); ?>



    <!-- Categories Section Starts Here -->
    <section class="category menu-head">
        <img src="images/banner 10.png" class="img-cat img-responsive img-curve"><br><br><br><br><br><br>

        <div class="container-cat">
            <h2 class="text-center">Explore Foods</h2>
        </div>

        <section  class="menu-cat-cat">
            <div class="wrapper-cat">
                <?php

                    // Display All the Categories that are Active.
                    // Create SQL Query.
                    $sql = "SELECT * FROM tbl_category WHERE Active = 'Yes'";

                    // Execute the Query.
                    $res = mysqli_query($conn, $sql);

                    // Count the Rows.
                    $count = mysqli_num_rows($res);

                    // Check Whether Categories are Available or Not.
                    if($count>0)
                    {
                        // Categories Available.
                        while($row = mysqli_fetch_assoc($res))
                        {
                            // Get the Values.
                            $id = $row['Id'];
                            $title = $row['Title'];
                            $image_name = $row['Image_name'];

                            ?>

                                <a href="<?php echo SITEURL; ?>category-foods.php?Category_id=<?php echo $id; ?>">
                                    <div class="box-3-cat float-container">
                                        <?php
                                            if($image_name == "")
                                            {
                                                // Image Not Available.
                                                echo "<div class='error'> Image Not Found </div>";
                                            }
                                            else
                                            {
                                                // Image Available.
                                                ?>
                                                    <img src="<?php echo SITEURL; ?>images/category/<?php echo $image_name; ?>" alt="Categories" class="img-cat img-responsive img-curve" style="height: 320px; ">
                                                <?php
                                            }
                                        ?>
                                    

                                        <div class="info">
                                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis, adipisci!</p><br>   
                                            <h3><?php echo $title; ?></h3>
                                        </div>
                                    </div>
                                </a>

                            <?php

                            
                        }
                    }
                    else
                    {
                        // Categories Not Available.
                        echo "<div class='error'> Category Not Found </div>";
                    }

                ?>
            </div>

        </section>

        <div class="clearfix"></div>

    </section>
    <!-- Categories Section Ends Here -->




<?php include('partials-front/footer.php'); ?>