<?php
    session_start();
    session_destroy();
    header("window.location= index.php");
?>