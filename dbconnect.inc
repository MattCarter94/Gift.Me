<?php
    $host_name  = "localhost";
    $database   = "giftme";
    $user_name  = "root";
    $pword      = "";

    $connect = mysqli_connect($host_name, $user_name, $pword, $database);
    if (mysqli_connect_errno())
    {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }
?>