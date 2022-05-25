<?php
  include "config.php";

?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo $lang['title'] ?></title>
    <!-- บริการเช่ารถตู้ Vip เริ่มต้น 1,500 บาท พร้อมคนขับ -->
    <link rel="stylesheet" href="css/style1.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
  </head>
  <body>
  <nav>
        <input type="checkbox" id="check">
        <label for="check" class="checkbtn">
            <i class="fa fa-bars"></i>
        </label>
        <label class="logo" for="">VanVan</label>
        <ul>
            <li><a class="nava" href="index.php"><?php echo $lang['home'] ?></a></li>
            <li><a class="nava" href="rentinfo.php"><?php echo $lang['table'] ?></a></li>
            <li><a class="nava" href="rent.html"><?php echo $lang['rent'] ?></a></li>
            
        </ul>
    </nav>

      <div class="white-bg">
        <div class="container-mid margin-60">
            <div class="row">
                <div class="col-md-12">
                    <div class="main_title">
                        <h1> <span class="yl">V</span>an<span class="yl">V</span>an</h1>
                        <p><?php echo $lang['btitle'] ?></p>
                        <p>"<?php echo $lang['btitle1'] ?> <span class="yl">VanVan</span> "</p>
                    </div>
                </div>
                
            </div>
        </div>
        
        
    </div>
    <div class="container-mid margin-60">
        <div class="main_title">
            <h2><?php echo $lang['why'] ?> <span class="yl">VanVan</span></h2>
        </div>
        <div class="row">
            <div class="col">
                <div class="feature">
                    <i class="fa fa-exclamation-triangle" aria-hidden="true"></i>
                    <h3><?php echo $lang['top-sec'] ?> <span class="yl">100%</span></h3>
                    <p><?php echo $lang['b-sec'] ?></p>
                </div>
                <div class="feature">
                    <i class="fa fa-money" aria-hidden="true"></i>
                    <h3><span class="yl"><?php echo $lang['top-money'] ?></span><?php echo $lang['top-money1'] ?></h3>
                    <p><?php echo $lang['b-money'] ?></p>
                </div>
            </div>
            <div class="col">
                <div class="feature">
                    <i class="fa fa-male" aria-hidden="true"></i>
                    <h3><?php echo $lang['top-pro'] ?><?php echo $lang['top-pro2'] ?></h3>
                    <p><?php echo $lang['b-pro'] ?></p>
                </div>
                <div class="feature">
                <i class="fa fa-commenting-o" aria-hidden="true"></i>
                    <h3><?php echo $lang['top-comment'] ?><span class="yl"><?php echo $lang['top-comment2'] ?></span></h3>
                    <p><?php echo $lang['b-comment'] ?></p>
                </div>
            </div>
            
            
            
        </div>
    </div>
    
    <div class="banner">
        <p style="font-size:20px;margin-bottom:20px;"align="center"><?php echo $lang['contract'] ?></p>
        
        <div class="" style="font-size:16px;line-height:25px"align="center">
            <i class="fa fa-phone-square" aria-hidden="true"></i><label> Tel:02-285-8888</label><br>
            <i class="fa fa-facebook-official" aria-hidden="true"></i><label> Facebook:VanVancar</label><br>
            <i class="fa fa-inbox" aria-hidden="true"></i><label> vanvancar@email.com</label>
        </div>
    </div>
    
    <footer>
        <div class="footerx">
                
                <a href="index.php?lang=th"><?php echo $lang['lang_th'] ?></a>|
                <a href="index.php?lang=en"><?php echo $lang['lang_en'] ?></a>
        </div> 

        
    </footer>










    
    <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha384-nvAa0+6Qg9clwYCGGPpDQLVpLNn0fRaROjHqs13t4Ggj3Ez50XnGQqc/r8MhnRDZ" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>
  </body>
</html>