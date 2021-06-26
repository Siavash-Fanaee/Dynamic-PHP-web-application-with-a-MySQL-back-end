<header class="d-flex justify-content-center">
    <!--Justify links of header to center-->

    <!--Using navbar Class: expand on medium size and larger sizes - Bright font and h5 class for size -->
    <nav class="navbar navbar-expand-md navbar-light h5">

        <!--class navbar-header for creating a fix header before the other navbar links -->
        <div class="navbar-header">
            <a class="navbar-brand" href="aboutus.php">
                <h5>Foto Project</h5>
            </a>
        </div>

        <!-- Say Hi to the logged in client-->
        <?php
        if (array_key_exists("user_id", $_SESSION)) {
            echo "<h4>Hi " . $_SESSION["first_name"] . "!</h4>";
        }
        ?>

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
                <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
                <!--Disabling the link in relevant page-->
                <li class="nav-item"><a class="nav-link" href="testimonial.php">What our customers say</a></li>
                <li class="nav-item"><a class="nav-link" href="contactus.php">Contact us</a></li>
                
                <!--If statement to show Log in or Log out in navbar-->
                <?php
                if (array_key_exists("user_id", $_SESSION)) {
                    echo '<li class="nav-item"><a class="nav-link" href="logout.php">Log out</a> </li>';
                } else {
                    echo '<li class="nav-item"><a class="nav-link" href="members.php">Log in</a> </li>';
                }
                ?>
            </ul>
        </div>

    </nav> <!-- End of navbar -->

</header> <!-- End of header -->