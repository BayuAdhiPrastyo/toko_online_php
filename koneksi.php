<?php
    $con = mysqli_connect("localhost","root","","toko_online");

    // Check connection

    if (mysqli_connect_error()) {
        echo "Failed to connect to MYSQL: " . mysqli_connect_error();
        exit();
    }

?>