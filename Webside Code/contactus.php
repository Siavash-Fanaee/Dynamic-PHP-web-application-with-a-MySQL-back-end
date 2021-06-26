<!-- html 5 declaration:-->
<!DOCTYPE html>
<!--Declare the language of the Web page-->
<html lang="en">

<!--Importing Head module: -->

<head>
  <?php require __DIR__ . "/app/views/head.php"; ?>
  <!--Set title-->
  <title>Contact Us</title>
</head>

<body class="contactus">
  <!--Set class for body to use in css-->

  <!--Importing Header module: -->
  <?php require __DIR__ . "/app/views/header.php"; ?>
  <?php require __DIR__ . "/app/views/admin-link.php"; ?>

  <main>
    <!-- main content of the page are put in main tag -->


    <!-- using form tag to collect user inputs. set class for access fron css -->
    <!-- Set rows and columns to use bootstrap grid syetem -->
    <form class="contactform" method="POST">
      <!-- using form tag to collect user inputs. set class for access fron css -->
      <!-- Set rows and columns to use bootstrap grid syetem -->
      <div class="row">
        <div class="col-xl-12">
          <!-- columns: size: 12/12 of whole row fore extreme large and smaller size -->
          <input type="text" class="form-control mb-2" name="name" id="name" placeholder="Name *"> <!-- input type text. mb2: 2 units of margin to bottom -->
        </div>
        <div class="col-xl-12">
          <!-- columns: size: 12/12 of whole row fore extreme large and smaller size -->
          <input type="email" class="form-control mb-2" name="email" id="email" placeholder="Email *"> <!-- input type email. mb2: 2 units of margin to bottom -->
        </div>
        <div class="col-xl-12">
          <!-- columns: size: 12/12 of whole row fore extreme large and smaller size -->
          <input type="tel" class="form-control mb-2" name="phone_number" id="phone" placeholder="Phone number"> <!-- input type tel (phone). mb2: 2 units of margin to bottom -->
        </div>
        <div class="col-xl-12">
          <!-- columns: size: 12/12 of whole row fore extreme large and smaller size -->
          <textarea class="form-control mb-2" id="message" name="message" placeholder="Message" rows="5"></textarea> <!-- textarea box for 5 rows. mb2: 2 units of margin to bottom -->
        </div>
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
  </main>

  <!--Importing contactus_save.php and footer modules: -->
  <?php require __DIR__ . "/app/src/contactus_save.php"; ?>

  <?php require __DIR__ . "/app/views/footer.php"; ?>

</body>

</html>