<?php
    //Print error and stop loaidng the page if user is not admin or admin is logged out (require in all admin pages) 
    if (
        (array_key_exists("is_admin", $_SESSION) == false) ||
        ($_SESSION["is_admin"] == false)
    ){
        die("only admin can see this page");
    }
?>