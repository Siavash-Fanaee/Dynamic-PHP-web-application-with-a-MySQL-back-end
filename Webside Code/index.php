<!-- html 5 declaration:-->
<!DOCTYPE html>     
<!--Declare the language of the Web page-->
<html lang="en">    
<head>

    <!--Importing Head module: -->
    <?php require __DIR__ . "/app/views/head.php"; ?>
    <!--Set title-->
    <title>Home</title>
</head>

<body class="index">  <!--Set class for body to use in css-->

    <!--Importing Header module: -->
    <?php require __DIR__ . "/app/views/header.php"; ?>
    <?php require __DIR__ . "/app/views/admin-link.php"; ?>

    <main>  <!--Main content of the page-->

      <!--Crating Carousel to slideshow components cycling through elements-->
      <div class="d-flex justify-content-center align-items-end">
        <!-- carousel: -->
        <div id="demo" class="carousel slide container" data-ride="carousel">

          <!--Carousel Indicators Class (Put indicators lines on the bottom part of the Carousel) -->
          <ul class="carousel-indicators">
            <li data-target="#demo" data-slide-to="0" class="active"></li> <!--Set the first indicator as dufault active one-->
            <li data-target="#demo" data-slide-to="1"></li>
          </ul>
  
          <!--Carousel Inner to specify slides in the Carousel:-->
          <div class="carousel-inner">
  
            <div class="carousel-item active"> <!--Set the first item as dufault active one-->
              <!-- d-block to prevent browser default image alignment:-->
              <img class="d-block w-100 h-50" src="images/51.jpg" alt="every-occasion" width="1500" height="500">
              <div class="carousel-caption"> <!-- Carousel Caption-->
                <h3><a href="album-scenary.php">Siavash Fanaee</a></h3>
                <p><a href="album-scenary.php">Landscape and Nature photographer</a></p>
              </div>   
            </div>
  
            <div class="carousel-item"> <!--Second Carousel Item-->
              <img class="d-block w-100 h-50" src="images/52.jpeg" alt="table-arrangment" width="1500" height="500">
              <div class="carousel-caption"> <!-- Carousel Caption-->
                <h3><a href="album-urban.php">Graham Luby</a></h3>
                <p><a href="album-urban.php">Urban and Architecture photographer</a></p>
              </div>   
            </div>

          </div> <!-- End of carousel-inner-->
  
          <!-- Defining Prevoius and Next Control Icons for Carousel-->
          <a class="carousel-control-prev" href="#demo" data-slide="prev">
            <span class="carousel-control-prev-icon"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#demo" data-slide="next">
            <span class="carousel-control-next-icon"></span>
            <span class="sr-only">Next</span>
          </a>
        </div> <!-- End of carousel -->
      </div>

    </main>

    <!--Importing contactus_save.php modules: -->
    <?php require __DIR__ . "/app/views/footer.php"; ?>
</body>
</html>