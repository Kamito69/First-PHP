<?php
    $host = "localhost";
    $username = "root";
    $password = "";
    $database = "cnpmweb";

    $con = mysqli_connect($host, $username, $password, $database);

    if(!$con)
    {
        die("connect failt". mysqli_connect_error());
    }else{
        echo "ket noi thanh cong roi";
    }
?>