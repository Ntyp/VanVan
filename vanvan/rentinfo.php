<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>บริการเช่ารถตู้ Vip เริ่มต้น 1,500 บาท พร้อมคนขับ</title>
    <link rel="stylesheet" href="css/style1.css">
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"> </script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
    <script>
    




 function searchengine() {
        $("#provincedata tbody").empty();
        var provinces = [];
        var searchp = $("#searchp").val();
        $.getJSON('changwat.json', function(data) {
          // alert(data.province);
            for(var i=0; i< data.province.length;i++) {
              if(data.province[i].name.th == searchp){
                var tblRow = "<tr>" + "<td>" + data.province[i].name.th + "</td>" +
                
                            "<td>" + data.province[i].cost + "</td>" + 
                            "<td>" + data.province[i].distance + "</td>" +
                            "<td>" + data.province[i].oilbill + "</td>"  +
                            "<td>" + data.province[i].time + "</td>" + "</tr>"
                $(tblRow).appendTo("#provincedata tbody");
              } 
            }
            
        });
        
        return false;
    }











  
    
    </script>

</head>
  <body>
    <nav>
        <input type="checkbox" id="check">
        <label for="check" class="checkbtn">
            <i class="fa fa-bars"></i>
        </label>
        <label class="logo" for="">VanVan</label>
        <ul>
            <li><a class="nava" href="index.php">หน้าแรก</a></li>
            <li><a class="nava" href="rentinfo.php">ตารางราคา</a></li>
            <li><a class="nava" href="rent.html">จองรถตู้</a></li>
            
        </ul>
    </nav>



      








      <section>
        
        <center>
            <h2>ตารางราคา อัพเดท 11/09/2563</h2>
            <h3>รายละเอียดเพิ่มเติม</h3>
            <p>พนักงานจะทำการเติมน้ำมันเต็มถังจากบ้านทุกครั้ง</p>
            <p>ผู้เช่ารถจะต้องเติมน้ำมันให้เต็มถังอีกครั้งหลังจากที่ใช้บริการเรียบร้อยแล้ว</p>
            <div class="wrapper">
            <form>
                <div class="input_filed">
                    
                    <form action="rentinfo.php" method="POST">
                      <label for="">ค้นหาจังหวัดที่ต้องการ</label>
                      <input type="text" id="searchp" class="input">
                       <!-- <input name="search_changwat" id="search_changwat" class="input" type="text"> -->
                      <input type="submit" id="submit_province"  onclick=" return searchengine()" class="btn">   
                      <div id="result"></div>
                    </form>
                </div>
            </form>
            </div>
            
        </center>
        <center>
            <table class="table table-striped"   id="provincedata" border="2">
                <thead>
                        <th>จังหวัด</th>
                        <th>ราคา/วัน</th>
                        <th>ระยะทาง/กม</th>
                        <th>ค่าน้ำมันไป-กลับ(ประมาณ)</th>
                        <th>ใช้เวลาเดินทางประมาณ</th>
                </thead>
                <tbody>

                </tbody>
            </table>
        </center>
        
    </section>
    

      
      









    
    <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha384-nvAa0+6Qg9clwYCGGPpDQLVpLNn0fRaROjHqs13t4Ggj3Ez50XnGQqc/r8MhnRDZ" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>
  </body>
</html>