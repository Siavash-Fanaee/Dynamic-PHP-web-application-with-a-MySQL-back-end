<?php
  //if request method is post and action is login:
  if (($_SERVER["REQUEST_METHOD"] == "POST") && ($_POST["action"] == "login")) {
    //Import connect.php module:
    require __DIR__ . "/connect.php";


    // Using mysqli_real_escape_string to prevent SQL command injection and trim to erase blank spaces:
    $user_name = mysqli_real_escape_string($conn, trim($_POST["user_name"]));
    $password = mysqli_real_escape_string($conn, trim($_POST["password"]));
    
    //selecting all fields from user row when user and pass is valid:
    $result = $conn->query(
        "SELECT * FROM `user` WHERE username = '$user_name' AND password = '$password'"
    );

    // When user or pass is not in the database: show the error modal
    if($result->num_rows == 0) {
        // Error massage for using in error-modal
        $error_message = "Invalid username or password";
        //Import error-modal (modullar programming)
        require __DIR__ . "/../views/error-modal.php";
    }
    // When user and pass is found in the database: 
    else {
        // Fetch user's data and store in the session:
        $row = mysqli_fetch_assoc($result);
        $_SESSION["user_id"] = $row["id"];
        $_SESSION["user_type"] = $row["type"];
        $_SESSION["first_name"] = $row["first_name"];
        $_SESSION["is_admin"] = $row["is_admin"];
    }
  }
?>