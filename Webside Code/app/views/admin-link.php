<?php
    if ((array_key_exists("is_admin", $_SESSION)) && ($_SESSION["is_admin"])){
?>
<header class="d-flex justify-content-center">
    <!--Justify links of header to center-->

    <!--Using navbar Class: expand on medium size and larger sizes - Bright font and h5 class for size -->
    <nav class="navbar navbar-expand-md navbar-light h5">

        <!--class navbar-header for creating a fix header before the other navbar links -->
        <div class="navbar-header">
            <h5 class="mr-2">Admin Pannel</h5>
        </div>


        <!-- Crating a dropdown icon which activate in medium size and smaller sizes-->
        <div class="ml-auto">
            <!--Allign right the icon-->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#dropdown">
                <span class="navbar-toggler-icon"></span> <!-- Hamburger Icon-->
            </button>
        </div>


        <!-- Creating the navbar for Hamburger whitvh dropdown in medium size and smaller sizes-->
        <div class="collapse navbar-collapse" id="dropdown">
            <!--Navbar and its items:-->
            <ul class="navbar-nav">
                <li class="nav-item"><a class="nav-link" href="testimonial-edit.php">Testimonial edit</a></li>
                <li class="nav-item"><a class="nav-link" href="album-admin.php">Album edit</a></li>
                <li class="nav-item"><a class="nav-link" href="contactus-manage.php">Messages</a></li>
                <li class="nav-item"><a class="nav-link" href="price-edit.php">Prices</a></li>
            </ul>
        </div>

    </nav> <!-- End of navbar -->

</header> <!-- End of header -->
<?php } ?>