<?php

    include 'sever.php';
    // print_r($_POST);

    $flname = $_POST['flname'];
    $address = $_POST['address'];
    $tel    = $_POST['tel'];
    $uscard =   $_POST['uscard'];
    $province   = $_POST['province'];
    $goout      =   $_POST['goout'];
    $goback     =   $_POST['goback'];
    $status = "จองแล้ว";
    $vanid = "ว่าง";
    
    mysqli_query($conn,"INSERT INTO rent (cus_name,cus_address,cus_tel,cus_nID,province,date_go,date_back,status,van_id)
                  VALUES ('$flname','$address','$tel','$uscard','$province','$goout','$goback','$status','$vanid')");

    header('location:rent.html');
?>