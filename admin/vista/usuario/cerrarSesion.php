<?php
    session_start();
    $_SESSION['isLogged'] = FALSE;
 session_destroy();
 header("Location: /correophp/public/vista/login.html"); 
?>


