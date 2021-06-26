<?php
// Require admin protect module:
require __DIR__ . "/admin-protect.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Using mysqli_real_escape_string to prevent SQL command injection:
  $id = mysqli_real_escape_string($conn, trim($_POST["id"]));

  // If delete button is pressed hide the image (type = 0) and redirect client to the prevoius page
  if (array_key_exists("delete", $_POST)) {
    $conn->query("UPDATE `image` SET type = 0 WHERE id='$id'");
    header('Location: album-admin.php');
  } else {

    // Else (Submit cliked):
    // Using mysqli_real_escape_string to prevent SQL command injection:
    $photographer = mysqli_real_escape_string($conn, trim($_POST["photographer"]));
    $location = mysqli_real_escape_string($conn, trim($_POST["location"]));
    // If both contents are filled, update the info:
    if ((!empty($photographer)) && (!empty($location))) {
      $conn->query("
              UPDATE `image` 
              SET 
                  photographer='$photographer' ,
                  location='$location'
              WHERE id='$id'
          ");

      // If an image is selected: put the image file in directory and update the file name
      $target_dir = "images/";
      $target_file = $target_dir . basename($_FILES["imagefile"]["name"]);
      $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
      // Check if image file is a actual image or fake image
      $check = getimagesize($_FILES["imagefile"]["tmp_name"]);
      if ($check !== false) {
        move_uploaded_file($_FILES["imagefile"]["tmp_name"], $target_file);
        $file_name = basename($_FILES["imagefile"]["name"]);
        $conn->query("UPDATE `image` SET path='$file_name' WHERE id='$id'");
      }
    }
  }
}
