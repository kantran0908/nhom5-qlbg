<?php
    include '../src/controls.php';

    contact::delete($_GET["id"]);
    echo "<script> alert('delete success') </script>";
    echo "<script> window.location = 'contact-list.php' </script>";