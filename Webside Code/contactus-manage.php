<!-- html 5 declaration:-->
<!DOCTYPE html>
<!--Declare the language of the Web page-->
<html lang="en">

<head>
    <!--Importing Head module: -->
    <?php require __DIR__ . "/app/views/head.php"; ?>
    <!--Set title-->
    <title>contactus-manage</title>
</head>

<body class="contactus-manage"> <!--Set class for body to use in css-->
    <!--Importing Header module: -->
    <?php require __DIR__ . "/app/views/header.php"; ?>
    <?php require __DIR__ . "/app/views/admin-link.php"; ?>
    <?php require __DIR__ . "/app/src/admin-protect.php";?>

    <!--Importing Login module if user_id is not in the SESSION -->
    <?php
    if (array_key_exists("user_id", $_SESSION) == false) {
        require __DIR__ . "/app/views/login_modal.php";
    }
    ?>


    <main> <!-- main content of the page are put in main tag -->
        
        <!--Using container-fluid class for a full width container, spanning the entire width of the viewport-->
        <div class="container">
            <h3 class="center">Show Messages</h3>

            <!-- Set rows and columns to use bootstrap grid syetem -->
            <form class="row" id="contactus-manage-form">

                <!--Importing connect.php and testimonial_add module: -->
                <?php
                require __DIR__ . "/app/src/connect.php";
                require __DIR__ . "/app/src/testimonial_add.php";

                $result = $conn->query(
                    "SELECT * FROM message"
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
                                echo $row["name"];
                                echo "<br>";
                                echo $row["email"];
                                echo "<br>";
                                echo $row["phone_number"];
                                echo "<hr>";
                                echo $row["message"];
                                ?>
                            </div>
                        </div>
                        <!--End of card container-->
                    </div>

                <?php } ?>

            </form>
            <!--End of grid-->

        </div> <!-- End of div container -->


    </main>
</body>

</html>