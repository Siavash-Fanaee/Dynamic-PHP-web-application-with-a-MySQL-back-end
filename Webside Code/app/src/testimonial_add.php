<?php
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    //If user is not currently in the session, 
    if (array_key_exists("user_id", $_SESSION) == false) {
      // Error: Stop and show error message
      die("You need to log in");
    }
    
    //If user is currently in the session, import connect.php to connect site to the database:
    require __DIR__ . "/connect.php";

    $user_id = $_SESSION["user_id"];
    $testimonial = mysqli_real_escape_string($conn, $_POST["testimonial"]);
    $conn->query("INSERT INTO `testimonial` (testimonial, user_id, approved,	created_at) VALUES ('$testimonial', '$user_id', 1,	NOW())");
  }
?>