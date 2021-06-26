<?php

// Require admin protect module:
  require __DIR__ . "/admin-protect.php";
  if ($_SERVER["REQUEST_METHOD"] == "POST") {    
    //If user is currently in the session, import connect.php to connect site to the database:
    require __DIR__ . "/connect.php";

    //Set new prices and update them in the database
    $query = $conn->query("SELECT * FROM `price` ORDER BY `type` DESC");
    while($row = mysqli_fetch_assoc($query)){
     $type = $row["type"];
     $id = $row["id"];
        if (array_key_exists($type, $_POST)){
            $new_price = intval($_POST[$type]);
            if ($new_price > 0) {
                $conn->query("UPDATE `price` SET price='$new_price' WHERE id=$id");
            }
        }
    }
}

?>