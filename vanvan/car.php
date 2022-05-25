<?php
    include('sever.php');
    include('security.php');
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
            <li><a class="nava" href="car.php">รายละเอียดรถตู้</a></li>


        </ul>
        </nav>


      
      <table class="table table-striped"    border="2">
          <center><h2>รายละเอียดรถตู้</h2></center>
          <thead>
            <tr>
                <th>รหัส</th>
                <th>เจ้าของ</th>
                <th>ยี่ห้อ</th>
                <th>รุ่น</th>
                <th>ป้ายทะเบียน</th>
                
            </tr>
          </thead>
          <?php
                $sql = "SELECT * FROM van";
                $result = mysqli_query($conn,$sql);
                if(mysqli_num_rows($result) > 0){
                    while ($row = $result -> fetch_assoc()){
                        echo "<tr>
                        <td>".$row["van_id"]."</td>
                        <td>".$row["van_name"]."</td>
                        <td>".$row["van_brand"]."</td>
                        <td>".$row["van_type"]."</td>
                        <td>".$row["van_register"]."</td>
                        
                        
                        
                        </tr>";
                    }
                    echo "</table>";
                }
                
          ?>
      </table>

      <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha384-nvAa0+6Qg9clwYCGGPpDQLVpLNn0fRaROjHqs13t4Ggj3Ez50XnGQqc/r8MhnRDZ" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>
</body>
</html>