<!-- html 5 declaration:-->
<!DOCTYPE html>
<!--Declare the language of the Web page-->
<html lang="en">

<head>
  <!--Importing Head module: -->
  <?php require __DIR__ . "/app/views/head.php"; ?>
  <!--Set title-->
  <title>Members</title>
</head>

<body class="members"> <!--Set class for body to use in css-->

  <!--Importing modules: -->
  <?php require __DIR__ . "/app/src/members_signup.php"; ?>
  <?php require __DIR__ . "/app/src/members_login.php"; ?>
  <?php require __DIR__ . "/app/views/header.php"; ?>
  <?php require __DIR__ . "/app/views/admin-link.php"; ?>


  <main> <!-- main content of the page are put in main tag -->

    <form class="members1" method="POST">
      <!-- using form tag to collect user inputs. set class for access fron css -->
      <input type="hidden" name="action" value="login">
      <!-- Set rows and columns to use bootstrap grid syetem -->
      <div class="row">
        <div class="col-xl-5 col-lg-4">
          <!-- columns: size: 5/12 of whole row fore extreme large and 4/12 for large and smaller size -->
          <input type="text" class="form-control mb-2" name="user_name" id="user" placeholder="Username"> <!-- mb-2: 2 units of margin form bottom -->
        </div>
        <div class="col-xl-5 col-lg-4">
          <!-- columns: size: 5/12 of whole row fore extreme large and 4/12 for large and smaller size -->
          <input type="password" class="form-control mb-2" name="password" id="password" placeholder="Password"> <!-- mb-2: 2 units of margin form bottom -->
        </div>
        <div class="col-xl-2 col-lg-4">
          <!-- columns: size: 2/12 of whole row fore extreme large and 4/12 for large and smaller size -->
          <button type="submit" id="loginbtn" class="btn btn-primary btn-block">Log In</button> <!-- btn-block: expands button to whole column -->
        </div>
      </div>
    </form>

    <form class="members2" method="POST">
      <input type="hidden" name="action" value="signup"> <!-- To be distinguished by PHP (2 forms in 1 page) -->
      <!-- using form tag to collect user inputs. set class for access fron css -->
      <!-- Set rows and columns to use bootstrap grid syetem -->
      <div class="row">
        <div class="col-lg-6">
          <!-- columns: size: 6/12 of whole row fore large size -->
          <input type="text" class="form-control mb-2" name="first_name" id="firstname" placeholder="First Name">
        </div>
        <div class="col-lg-6">
          <!-- columns: size: 6/12 of whole row fore large size -->
          <input type="text" class="form-control mb-2" name="last_name" id="lastname" placeholder="Last Name">
        </div>
        <div class="col-lg-6">
          <!-- columns: size: 6/12 of whole row fore large size -->
          <input type="text" class="form-control mb-2" name="user_name" id="newuser" placeholder="Username">
        </div>
        <div class="col-lg-6">
          <!-- columns: size: 6/12 of whole row fore large size -->
          <input type="password" class="form-control mb-2" name="password" id="newpassword" placeholder="Password">
        </div>
      </div>
      
      <?php
        require __DIR__ . "/app/src/connect.php";
        $query = $conn->query("SELECT * FROM `price` ORDER BY `type` ASC");
        while($row = mysqli_fetch_assoc($query)){
      ?>
      <div class="form-check">
        <label class="form-check-label" for="radio2">
          <!-- label to conect to input element -->
          <input 
            type="radio" class="form-check-input" name="type" 
            value="option<?php echo $row["type"] ?>">
          <?php echo $row["name"] ?> (<?php echo $row["price"] ?> &euro; monthly)
          <!-- set type as radio -->
        </label>
      </div>
      <?php } ?>

      <!-- Set rows and columns to use bootstrap grid syetem -->
      <div class="row d-flex justify-content-center mt-2">
        <!-- Justify row elements to center -->
        <div class="col-xl-4">
          <!-- columns: size: 4/12 of whole row fore X-large size -->
          <button type="submit" id="newaccbtn" class="btn btn-success btn-block">Create New Account</button>
        </div>
      </div>
    </form>
  </main>

  <!--Importing Footer module: -->
  <?php require __DIR__ . "/app/views/footer.php"; ?>

</body>

</html>