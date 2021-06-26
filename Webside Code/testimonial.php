<!-- html 5 declaration:-->
<!DOCTYPE html>
<!--Declare the language of the Web page-->
<html lang="en">

<head>
    <!--Importing Head module: -->
    <?php require __DIR__ . "/app/views/head.php"; ?>
    <!--Set title-->
    <title>Testimonial</title>
</head>

<body class="testimonial"> <!--Set class for body to use in css-->
    <!--Importing Header module: -->
    <?php require __DIR__ . "/app/views/header.php"; ?>
    <?php require __DIR__ . "/app/views/admin-link.php"; ?>

    <!--Importing Login module if user_id is not in the SESSION -->
    <?php
    if (array_key_exists("user_id", $_SESSION) == false) {
        require __DIR__ . "/app/views/login_modal.php";
    }
    ?>


    <main> <!-- main content of the page are put in main tag -->
        
        <!--Using container-fluid class for a full width container, spanning the entire width of the viewport-->
        <div class="container">
            <h1 class="center">Foto Project</h1> <!-- pb-2: padding bottom 2 units -->
            <h3 class="center">Testimonial</h3>

            <!-- Set rows and columns to use bootstrap grid syetem -->
            <div class="row" id="testimonials">

                <!--Importing connect.php and testimonial_add module: -->
                <?php
                require __DIR__ . "/app/src/connect.php";
                require __DIR__ . "/app/src/testimonial_add.php";

                $result = $conn->query(
                    "SELECT 
                        testimonial.*, user.first_name, user.type 
                    FROM `testimonial` LEFT JOIN `user` 
                    ON `testimonial`.`user_id` = `user`.`id`
                    WHERE approved = 1
                    ORDER BY created_at DESC"
                );

                // While the result exists, print the testimonials:
                while ($row = mysqli_fetch_assoc($result)) {
                ?>
                    <!--Column size 12/12 for large, 6/12 for medium and smaller sizes:-->
                    <div class="col-xl-12  pb-4">
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
                <?php } ?>

            </div>
            <!--End of grid-->

        </div> <!-- End of div container -->

        <!-- If user_id is in the SESSION, show the submition form: -->
        <?php if (array_key_exists("user_id", $_SESSION)) { ?>
            <form class="contactform" method="POST">
                <!-- using form tag to collect user inputs. set class for access fron css -->
                <!-- Set rows and columns to use bootstrap grid syetem -->
                <div class="row">
                    <div class="col-xl-12">
                        <!-- columns: size: 12/12 of whole row fore extreme large and smaller size -->
                        <textarea type="text" class="form-control mb-2" name="testimonial" id="testimonial" placeholder="Write your opinion"></textarea> <!-- input type text. mb2: 2 units of margin to bottom -->
                    </div>


                </div>
                <!-- Set row and justify its content to center: -->
                <div class="row d-flex justify-content-center mt-2">
                    <!-- column with sensetive size: -->
                    <div class="col-xl-3 col-lg-4 col-6">
                        <button type="submit" id="button" class="btn btn-success btn-block">Submit</button> <!-- Set btn-block to expand button to whole cloumn -->
                    </div>
                </div>
            </form>
        <?php } ?>

    </main>
</body>

</html>