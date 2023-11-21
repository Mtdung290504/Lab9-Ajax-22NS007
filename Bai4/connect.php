<?php
    $sv = $_SERVER['SERVER_NAME'].":3307";
    $user = 'root';
    $db = 'udn';
    $con = mysqli_connect($sv, $user, '', $db);
    mysqli_query($con, "set names 'utf8'");
?>