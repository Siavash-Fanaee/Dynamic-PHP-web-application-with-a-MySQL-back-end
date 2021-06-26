<!-- html 5 declaration:-->
<!DOCTYPE html>
<!--Declare the language of the Web page-->
<html lang="en">

<head>
    <!--Importing Head module: -->
    <?php require __DIR__ . "/app/views/head.php"; ?>
    <!--Set title-->
    <title>testimonial-edit</title>
</head>

<body class="testimonial-edit"> <!--Set class for body to use in css-->
    <!--Importing Header module: -->
    <?php require __DIR__ . "/app/views/header.php"; ?>
    <?php require __DIR__ . "/app/views/admin-link.php"; ?>
    <?php require __DIR__ . "/app/src/admin-protect.php";?>

    <!--Importing Login module if user_id is not in the SESSION -->
    <?php
    if (array_key_exists("user_id", $_SESSION) == false) {
        require __DIR__ . "/app/views/login_modal.php";
    }
    require __DIR__ . "/app/src/testimonial_edit.php";
    ?>


    <main> <!-- main content of the page are put in main tag -->
        
        <!--Using container-fluid class for a full width container, spanning the entire width of the viewport-->
        <div class="container">
            <h3 class="center">Testimonial Approve</h3>

            <!-- Set rows and columns to use bootstrap grid syetem -->
            <form class="row" id="testimonial-edit-form">

                <!--Importing connect.php and testimonial_add module: -->
                <?php
                require __DIR__ . "/app/src/connect.php";
                require __DIR__ . "/app/src/testimonial_add.php";

                $result = $conn->query(
                    "SELECT 
                        testimonial.*, user.first_name, user.type 
                    FROM `testimonial` LEFT JOIN `user` 
                    ON `testimonial`.`user_id` = `user`.`id`
                    ORDER BY created_at DESC"
                );
                // While the result exists, print the testimonials:
                while ($row = mysqli_fetch_assoc($result)) {
                ?>
                    <!--Column size 12/12 for large, 6/12 for medium and smaller sizes:-->
                    <div class="col-xl-12  pb-2 pt-4">
                        <!--pd-4: Padding bottom 4 units-->
                        <!--card container and its elements:-->
                        <div class="card container pt-2">
                            <div class="card-body">
                                <?php
                                if ($row["type"] == 1){
                                    $type = "Scenary";
                                } 
                                else if ($row["type"] == 1){
                                    $type = "Urban";
                                } else {
                                    $type = "All Photos";
                                }
                                
                                echo $row["first_name"];
                                echo "<br>";
                                echo "Subscribed to " . $type;
                                echo "<br>";
                                echo $row["testimonial"];
                                echo "<br>";
                                echo $row["created_at"];
                                ?>
                            </div>
                        </div>
                        <!--End of card container-->
                    </div>

                    
                    <div class="col-6 col-sm-4 col-md-3 d-flex justify-content-center">
                        <!-- columns: size: 3/12 of whole row fore X-large size -->
                        <button 
                            <?php if ($row["approved"] == 1) echo "disabled" ?>
                            type="submit" id="button" class="btn btn-success btn-block"
                            name="approve" value=<?php echo $row["id"] ?>
                        >Approve</button> <!-- Set btn-block to expand button to whole cloumn -->
                    </div> 
                    
                    <div class="col-6 col-sm-4 col-md-3 d-flex justify-content-center">
                        <!-- columns: size: 3/12 of whole row fore X-large size -->
                        <button 
                            <?php if ($row["approved"] == 0) echo "disabled" ?>
                            type="submit" id="button" class="btn btn-success btn-block"
                            name="hide" value=<?php echo $row["id"] ?>
                        >Hide</button> <!-- Set btn-block to expand button to whole cloumn -->
                    </div> 

                <?php } ?>

            </form>
            <!--End of grid-->

        </div> <!-- End of div container -->


    </main>
</body>

</html>