<!-- html 5 declaration:-->
<!DOCTYPE html> 
<!--Declare the language of the Web page-->
<html lang="en">

<!--Importing Head module: -->
<head>
    <?php require __DIR__ . "/app/views/head.php"; ?>
    <!--Set title-->
    <title>Urban Album</title>
</head>

<body class="album">     <!--Set class for body to use in css-->

    <!--Importing Header module: -->
    <?php require __DIR__ . "/app/views/header.php"; ?>
    <?php require __DIR__ . "/app/views/admin-link.php"; ?>

    <!--Importing login_modal and type_invalid_modal module: -->
    <?php
        require __DIR__ . "/app/views/login_modal.php";
        require __DIR__ . "/app/views/type_invalid_modal.php";
    ?>


    <main>  <!-- main content of the page are put in main tag -->

        <!--Using container-fluid class for a full width container, spanning the entire width of the viewport-->
        <div class="container">
            <h1 class="pb-2">Foto Project</h1> <!-- pb-2: padding bottom 2 units -->
            <h3>Urban Album</h3>
            <h6>Graham cut his teeth as a student music journalist in the early 2010s (bringing 
                his Nikon to concerts as another way of justifying his complimentary tickets). 
                He has since branched out, documenting Dublin's lively culinary scene for various 
                publications (<a href="http://lovindublin.ie/" target="_blank">Lovindublin.ie</a>, 
                <a href="https://www.joe.ie/" target="_blank">Joe.ie</a>) as well as providing 
                custom work for authors and publications.</h6>

            <!-- Set rows and columns to use bootstrap grid syetem -->
            <div class="row pt-3">

                <!-- Importing connect.php module to connect to the database  -->
                <?php
                require __DIR__ . "/app/src/connect.php";

                //Query for the rows of type 1 from image table:
                $type = 2;
                $result = $conn->query(
                    "SELECT * FROM `image` WHERE type = $type"
                );
                //Loop for displaying type 2 image cards: 
                while ($row = mysqli_fetch_assoc($result)) {
                    include __DIR__ . "/app/views/album-item.php";
                } ?>

            </div>  <!--End of grid-->

        </div> <!-- End of div container -->

    </main>
</body>

</html>