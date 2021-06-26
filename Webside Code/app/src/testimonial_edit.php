<?php
// Require admin protect module:
  require __DIR__ . "/admin-protect.php";
  if ($_SERVER["REQUEST_METHOD"] == "GET") {    
    //If user is currently in the session, import connect.php to connect site to the database:
    require __DIR__ . "/connect.php";

    // Set actions for click and types for possible states of testimonials:
    if (array_key_exists("approve", $_GET)) {
        $id = intval($_GET["approve"]);
        $state = 1;
    }
    elseif (array_key_exists("hide", $_GET)) {
        $id = intval($_GET["hide"]);
        $state = 0;
    } else {
       $state = -1;
    }
    //Apply the state in the database:
    if ($state != -1){
      //Coonect to the database
        require __DIR__ . "/connect.php";
        //Query for update:
        $conn->query("
            UPDATE `testimonial` SET approved='$state' WHERE id=$id
        ");
    }

  }
?>