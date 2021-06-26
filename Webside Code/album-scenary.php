<!-- html 5 declaration:-->
<!DOCTYPE html> 
<!--Declare the language of the Web page-->
<html lang="en">

<!--Importing Head module: -->
<head>
    <?php require __DIR__ . "/app/views/head.php"; ?>
    <!--Set title-->
    <title>Scenery Album</title>
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


    <main> <!-- main content of the page are put in main tag -->

        <!--Using container-fluid class for a full width container, spanning the entire width of the viewport-->
        <div class="container">
            <h1 class="pb-2">Foto Project</h1> <!-- pb-2: padding bottom 2 units -->
            <h3>Scenery Album</h3>
            <h6>Siavash's documentation of the winter months in Iran's Alborz mountain range 
                brought him to the attention of Hiker's Journal in late 2017. Thanks to his 
                experience as a climber, <a href="https://www.nationalgeographic.com/" target="_blank">
                National Geographic</a> subsequently commissioned 
                his services in the Tibetan Himalayas, helping to bring the Sherpa's off-season 
                cleanup efforts to a wider audience. He is currently based in Dublin.</h6>

            <!-- Set rows and columns to use bootstrap grid syetem -->
            <div class="row pt-3">
                <?php
                //  Importing connect.php module to connect to the database
                require __DIR__ . "/app/src/connect.php";

                //Query for the rows of type 1 from image table:
                $type = 1;
                $result = $conn->query(
                    "SELECT * FROM `image` WHERE type = $type"
                );
                // Loop for displaying type 1 image cards: 
                while ($row = mysqli_fetch_assoc($result)) {
                    //  Importing album-item.php module:
                    include __DIR__ . "/app/views/album-item.php";
                } ?>

            </div> <!--End of grid-->
            
        </div> <!-- End of div container -->

    </main>
</body>

</html>