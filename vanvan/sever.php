<?php
    $severname = "localhost";
    $username = "root";
    $password = "";
    $dbname = "vanvan";


    $conn = mysqli_connect($severname,$username,$password,$dbname);
    mysqli_query($conn,"SET NAMES UTF8");
    if(!$conn) {
        die ("Connection failed" . mysqli_connect_error());
    }

?>