<?php
// Start the session
session_start();
session_destroy();
// Redirect the logged out client to the home page
header('Location: index.php');

?>