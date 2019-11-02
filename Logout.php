<?php
    session_start();
    session_destroy();

    setcookie("Username", $uname, time()-3, "/"); //destroy cookie
    header('location:Login.php');

?>