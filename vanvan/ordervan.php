<?php
    include('sever.php');

    $query = "SELECT * FROM van ";
    $result =  mysqli_query($conn,$query);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>
<body>
    <h2>สถานะรถตู้</h2>
    <table  class="table table-striped"   id="provincedata" border="2">
        <thread>
            <tr>
                <th>รหัสคนขับ</th>
                <th>ชื่อคนขับ</th>
                <th>ยี่ห้อ</th>
                <th>รุ่น</th>
                <th>ทะเบียนรถ</th>
                <th>สถานะ</th>
                <th>แก้ไข</th>
                <th>ลบ</th>
            </tr>
        </thread>
        <?php
            while ($row = mysqli_fetch_array($result,mysqli_assoc)) {
                <td><?php echo $row['van_id']; ?></td>
                <td><?php echo $row['van_name']; ?></td>
                <td><?php echo $row['van_brand']; ?></td>
                <td><?php echo $row['van_type']; ?></td>
                <td><?php echo $row['van_register']; ?></td>
                <td><?php echo $row['van_status']; ?></td>
            
        ?>
        <tr>

        </tr>
        <?php 
                        } 
                        mysqli_free_result($result);
                        mysqli_close($conn);
            
                    ?>
    </table>
</body>
</html>