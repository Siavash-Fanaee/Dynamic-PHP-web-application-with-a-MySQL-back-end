<?php

//if request method is post and action is Signup:
if (($_SERVER["REQUEST_METHOD"] == "POST") && ($_POST["action"] == "signup")) {
  //Import connect.php module:
  require __DIR__ . "/connect.php";

  // Using mysqli_real_escape_string to prevent SQL command injection and trim to erase blank spaces:
  $first_name = mysqli_real_escape_string($conn, trim($_POST["first_name"]));
  $last_name = mysqli_real_escape_string($conn, trim($_POST["last_name"]));
  $user_name = mysqli_real_escape_string($conn, trim($_POST["user_name"]));
  $password = mysqli_real_escape_string($conn, trim($_POST["password"]));
  $type = mysqli_real_escape_string($conn, trim($_POST["type"]));
  $is_admin = 0;

  //Using switch for 3 types of sign up options
  switch ($type) {
    case "option1":
      $type = 1;
      break;
    case "option2":
      $type = 2;
      break;
    default:
      $type = 3;
  }

  // If all parts of the form are filled: 
  if (
    (!empty($first_name)) && (!empty($last_name)) && (!empty($user_name)) && (!empty($password))
  ) {
    // Check if the info is already existed usnig a nested if:
    $result = $conn->query("SELECT id FROM `user` WHERE username = '$user_name'");

    // User is new. Insert into database (successful sign up):
    if ($result->num_rows == 0) {
      $conn->query(
        "INSERT INTO `user` 
            (first_name, 	last_name, username,	password, type, is_admin) 
          VALUES 
            ('$first_name', '$last_name', '$user_name',	'$password','$type', '$is_admin')"
      );
    // If $result->num_rows != 0, user already exists. Import error-modal with special message:
    } else {
      $error_message = "User already exists";
      require __DIR__ . "/../views/error-modal.php";
    }
  }
  // If each part of the form is empty, import error-modal with special message:
  else {
    $error_message = "please fill all boxes";
    require __DIR__ . "/../views/error-modal.php";
  }
}
