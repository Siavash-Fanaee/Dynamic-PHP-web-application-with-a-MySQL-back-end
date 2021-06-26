<?php 
  //Posting inserted "Contact us" data into database:

  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    require __DIR__ . "/connect.php"; //Import connect:

    // Using mysqli_real_escape_string to prevent SQL command injection:
    $name = mysqli_real_escape_string($conn, $_POST["name"]);
    $email = mysqli_real_escape_string($conn, $_POST["email"]);
    $phone_number = mysqli_real_escape_string($conn, $_POST["phone_number"]);
    $message = mysqli_real_escape_string($conn, $_POST["message"]);
    //Inserting the "Contact us" data via invoking query from $conn:
    $conn->query("INSERT INTO `message` (name, 	email, phone_number,	message) VALUES ('$name', '$email', '$phone_number',	'$message')");
  }
?>