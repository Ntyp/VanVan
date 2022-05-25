<?php 
    session_start();
    include('sever.php');
    if(!$_SESSION['username']) {
        header("Location: login.php");
        exit;
    }
    


    // $status= "";
    
    // if(isset($_POST['searchcus_name'])) {
    //         $cus_name = $_POST['cus_name'];
    //         $query1 = "SELECT * FROM van WHERE cus_name = '$cus_name'";
    //         $result1 = mysqli_query($conn,$query1);
    //         if(mysqli_num_rows($result1) == 1) {
    //             $sql = mysqli_query($conn,"SELECT rent.cus_name,rent.cus_tel,van.van_id,van.van_name,van.van_brand,van.van_type,rent.province,province.cost,rent.date_go,rent.date_back FROM rent join van on rent.van_id=van.van_id JOIN province ON rent.province=province.name
    //             group by van.van_id'");
    //             $result = mysqli_query($conn,$sql);
    //             if(mysqli_num_rows($result) > 0){
    //                 while ($row = $result -> fetch_assoc()){
    //                     echo "<tr>
    //                     <td>".$row["cus_name"]."</td>
    //                     <td>".$row["cus_tel"]."</td>
    //                     <td>".$row["van.van_id"]."</td>
    //                     <td>".$row["van.van_name"]."</td>
    //                     <td>".$row["van.van_brand"]."</td>
    //                     <td>".$row["van.van_type"]."</td>
    //                     <td>".$row["rent.province"]."</td>
    //                     <td>".$row["province.cost"]."</td>
    //                     <td>".$row["rent.date_go"]."</td>
    //                     <td>".$row["rent.date_back"]."</td>
    //                     </tr>";
    //                 }
    //                 echo "</table>";
    //             }
                
    //         }
            
    // }










    

?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style1.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap-theme.min.css" integrity="sha384-6pzBo3FDv/PJ8r2KRkGHifhEocL+1X2rVCTTkUfGk7/0pbek5mMa1upzvWbrUbOZ" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>

    <title>บริการเช่ารถตู้ Vip เริ่มต้น 1,500 บาท พร้อมคนขับ</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
</head>
<body>
<nav>
        <input type="checkbox" id="check">
        <label for="check" class="checkbtn">
            <i class="fa fa-bars"></i>
        </label>
        <label class="logo" herf="admin.php" for="">VanVan</label>
        <ul>
            <li><a class="nava" href="admin.php">Dashboard</a></li>
            <li><a class="nava" href="status.php">สถานะการจอง</a></li>
            <li><a class="nava" href="data.php">ข้อมูลการจอง</a></li>
            <li><a class="nava" href="car.php">ข้อมูลการจอง</a></li>


        </ul>
        </nav>
        

      <table class="table table-striped"    border="2">
        <center>
        <h2>ค้นหาข้อมูลลูกค้า</h2>
          <form action="" method="POST">
              <label for="">กรุณาใส่ชื่อลูกค้า </label>   
              <input type="text" name="cus_name">
              <input class="btn" type="submit" name="searchcus_name" value="ค้นหา">
          </form>
        </center>

          <thead>
            <tr>
                <th>ชื่อ</th>
                <th>เบอร์ติดต่อ</th>
                <th>เลขรถ</th>
                <th>ชื่อคนขับ</th>
                <th>ยี่ห้อรถยนต์</th>
                <th>รุ่น</th>
                <th>จังหวัด</th>
                <th>ราคาต่อวัน</th>
                <th>วันเดินทางไป</th>
                <th>วันเดินทางกลับ</th>
            </tr>
          </thead>
          
          <?php
                
                if(isset($_POST['searchcus_name'])){
                    $cus_name = $_POST['cus_name'];
                    $sql = "SELECT rent.cus_name,rent.cus_tel,van.van_id,van.van_name,van.van_brand,van.van_type,rent.province,province.cost,rent.date_go,rent.date_back FROM rent join van on rent.van_id=van.van_id JOIN province ON rent.province=province.name
                     where rent.cus_name = '$cus_name' group by van.van_id";
                    $result = mysqli_query($conn,$sql);
                    if(mysqli_num_rows($result) > 0){
                        while ($row = $result -> fetch_assoc()){
                            echo "<tr>
                            <td>".$row["cus_name"]."</td>
                            <td>".$row["cus_tel"]."</td>
                            <td>".$row["van_id"]."</td>
                            <td>".$row["van_name"]."</td>
                            <td>".$row["van_brand"]."</td>
                            <td>".$row["van_type"]."</td>
                            <td>".$row["province"]."</td>
                            <td>".$row["cost"]."</td>
                            <td>".$row["date_go"]."</td>
                            <td>".$row["date_back"]."</td>
                        
                        
                        </tr>";
                    }
                    echo "</table>";
                    }
                }


                
                
          ?>
      </table>














        
      <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha384-nvAa0+6Qg9clwYCGGPpDQLVpLNn0fRaROjHqs13t4Ggj3Ez50XnGQqc/r8MhnRDZ" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>
</body>
</html>