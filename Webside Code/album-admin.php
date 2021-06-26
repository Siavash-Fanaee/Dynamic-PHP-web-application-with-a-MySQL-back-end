<!-- html 5 declaration:-->
<!DOCTYPE html> 
<!--Declare the language of the Web page-->
<html lang="en">

<!--Importing Head module: -->
<head>
    <?php require __DIR__ . "/app/views/head.php"; ?>
    <!--Set title-->
    <title>Admin Album</title>
</head>

<body class="album-edit">     <!--Set class for body to use in css-->

    <!--Importing Header module: -->
    <?php require __DIR__ . "/app/views/header.php"; ?>
    <?php require __DIR__ . "/app/views/admin-link.php"; ?>
    <?php require __DIR__ . "/app/src/admin-protect.php";?>
    
    <main> <!-- main content of the page are put in main tag -->

        <!--Using container-fluid class for a full width container, spanning the entire width of the viewport-->
        <div class="container">
            <h1 class="pb-2">Foto Project</h1> <!-- pb-2: padding bottom 2 units -->
            <h3>Admin Album</h3>

            <!-- Set rows and columns to use bootstrap grid syetem -->
            <div class="row pt-3">
                <?php
                //  Importing connect.php module to connect to the database
                require __DIR__ . "/app/src/connect.php";

                //Query for the rows of type 1 from image table:
                $result = $conn->query(
                    "SELECT * FROM `image` where type != 0"
                );
                // Loop for displaying type 1 image cards: 
                while ($row = mysqli_fetch_assoc($result)) {
                    //  Importing album-item.php module:
                    include __DIR__ . "/app/views/album-item-admin.php";
                } ?>

            </div> <!--End of grid-->
            
        </div> <!-- End of div container -->

    </main>
</body>

</html>