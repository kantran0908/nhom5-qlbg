<?php
    include '../src/controls.php';

    category::delete($_GET["cate"]);
    echo "<script> alert('delete success') </script>";
    echo "<script> window.location = 'category-list.php' </script>";