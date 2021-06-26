<!-- html 5 declaration:-->
<!DOCTYPE html>
<!--Declare the language of the Web page-->
<html lang="en">

<!--Importing Head module: -->

<head>
  <?php require __DIR__ . "/app/views/head.php"; ?>
  <!--Set title-->
  <title>album-edit</title>
</head>

<body class="album-edit">
  <!--Set class for body to use in css-->

  <!--Importing Header module: -->
  <?php require __DIR__ . "/app/views/header.php"; ?>
  <?php require __DIR__ . "/app/views/admin-link.php"; ?>
  <?php require __DIR__ . "/app/src/admin-protect.php";?>
  <?php
    require __DIR__ . "/app/src/connect.php";
    require __DIR__ . "/app/src/album-edit.php";

    $id = intval($_GET["id"]);
    $result = $conn->query(
      "SELECT * FROM `image` WHERE id = '$id' AND type != 0"
    );
    $image = mysqli_fetch_assoc($result);
    if (!$image){
      die("Image not found");
    }
  ?>
  <main>
    <!-- main content of the page are put in main tag -->


    <!-- using form tag to collect user inputs. set class for access fron css -->
    <!-- Set rows and columns to use bootstrap grid syetem -->
    <form class="album-edit-form" method="POST" enctype="multipart/form-data">>
      <!-- using form tag to collect user inputs. set class for access fron css -->
      <!-- Set rows and columns to use bootstrap grid syetem -->
      <div class="row" id="album-edit-form">
        <!-- columns: size: 12/12 of whole row fore extreme large and smaller size -->
        <div class="col-xl-12">
          <h3>Edit Image Card</h3>
        </div>
        <div class="col-xl-12 mt-4">
          <img class="card-img-top" src="images/<?php echo $image['path'] ?>" alt="A pic of Iran">
          <input type="hidden" name="id" value="<?php echo $image["id"] ?>">
          <input type="file" name="imagefile">
          <input 
            type="text" class="form-control mb-2" 
            name="location" id="location-edit" placeholder="Location:"
            value="<?php echo $image["location"] ?>"
          > <!-- input type text. mb2: 2 units of margin to bottom -->
          <input 
            type="text" class="form-control mb-2" name="photographer" 
            id="photographer" placeholder="Photographer:"
            value="<?php echo $image["photographer"] ?>"
          > <!-- input type text. mb2: 2 units of margin to bottom -->
        </div>

        <div class="col-xl-3 d-flex justify-content-center">
          <!-- columns: size: 3/12 of whole row fore X-large size -->
          <button type="submit" id="button" name="submit" value="submit"class="btn btn-success mr-2">Submit</button> <!-- Set btn-block to expand button to whole cloumn -->
          <button type="submit" id="button" name="delete" value="delete" class="btn btn-danger">Delete</button> 
        </div>
      </div>


    </form>
  </main>


</body>

</html>