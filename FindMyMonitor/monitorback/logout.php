<?php
    session_start();

    session_destroy();

    header('location: ../monitores/login.php');
?>