<?php
    session_start();
    session_unset($_SESSION);
    session_destroy();
    session_write_close();
    header("location: ./Alumni/index.php");
    die;
?>