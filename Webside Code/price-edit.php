<!-- html 5 declaration:-->
<!DOCTYPE html>
<!--Declare the language of the Web page-->
<html lang="en">

<head>
    <!--Importing Head module: -->
    <?php require __DIR__ . "/app/views/head.php"; ?>
    <!--Set title-->
    <title>price-edit</title>
</head>

<body class="contactus-manage"> <!--Set class for body to use in css-->
    <!--Importing Header module: -->
    <?php require __DIR__ . "/app/views/header.php"; ?>
    <?php require __DIR__ . "/app/views/admin-link.php"; ?>
    <?php require __DIR__ . "/app/src/admin-protect.php";?>
    <?php require __DIR__ . "/app/src/price_edit.php"; ?>

    <!--Importing Login module if user_id is not in the SESSION -->
    <?php
    if (array_key_exists("user_id", $_SESSION) == false) {
        require __DIR__ . "/app/views/login_modal.php";
    }
    ?>


    <main> <!-- main content of the page are put in main tag -->
        
        <!--Using container-fluid class for a full width container, spanning the entire width of the viewport-->
        <div class="container">
            <h3 class="center">Edit Prices</h3>

            <!-- Set rows and columns to use bootstrap grid syetem -->
            <form class="contactform" method="POST">
      <!-- using form tag to collect user inputs. set class for access fron css -->
      <!-- Set rows and columns to use bootstrap grid syetem -->
      <div class="row">
        <?php 
          require __DIR__ . "/app/src/connect.php";
          $query = $conn->query("SELECT * FROM `price` ORDER BY `type` ASC");
          while($price = mysqli_fetch_assoc($query)){
        ?>
          <div class="col-xl-12">
            <!-- columns: size: 12/12 of whole row fore extreme large and smaller size -->
            <label for="<?php echo $price["name"] ?>"><?php echo $price["name"] ?></label>
            <input 
              type="number" class="form-control mb-2" 
              name="<?php echo $price["type"] ?>" 
              placeholder="<?php echo $price["name"] ?>"
              value="<?php echo $price["price"] ?>" 
            ?>
          </div>
        <?php } ?>
      </div>

      <!-- Set rows and columns to use bootstrap grid syetem -->
      <div class="row d-flex justify-content-center mt-2">
        <!-- Set row and justify its content to center -->
        <div class="col-xl-3">
          <!-- columns: size: 3/12 of whole row fore X-large size -->
          <button type="submit" id="button" class="btn btn-success btn-block">Submit</button> <!-- Set btn-block to expand button to whole cloumn -->
        </div>
      </div>

    </form>

        </div> <!-- End of div container -->


    </main>
</body>

</html>
