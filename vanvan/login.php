
<?php 
    session_start();
    if(isset($_POST['username'])) {
        include('sever.php');
        $username = $_POST['username'];
        $password = $_POST['password'];
        $query = "SELECT * FROM user WHERE username = '$username' AND password = '$password'";
        $result = mysqli_query($conn,$query);
        if(mysqli_num_rows($result) == 1) {
            // setcookie("username","$username",time()+3600*24*7 );
            // setcookie("password","$password",time()+3600*24*7 );
            $row = mysqli_fetch_array($result);
            $_SESSION['username'] = $row['username'];
            if(!empty($_POST['remember'])) {
                setcookie('user_login',$_POST['username'],time() + (10*365*24*60*60));
                setcookie('user_password',$_POST['password'],time() + (10*365*24*60*60));
            }
            else {
                if(isset($_COOKIE['user_login'])) {
                    setcookie('user_login','');

                    if(isset($_COOKIE['user_password'])) {
                        setcookie('user_password','');
                    }
                }
            }
            
            header("Location: admin.php");
        }
        else {
            echo "<script>
                alert 'Plese Check Your ID';
                window.location.herf='login.php';
            </script>";
        }
    }


?>

<!DOCTYPE html>
<html>
<head>
  <title>Registration system PHP and MySQL</title>
  <link rel="stylesheet" href="css/stylelogin.css">
</head>
<body>
    
	 
  <div class="wrapper">
        <div class="title">
            <h2>LOGIN ADMIN</h2>
        </div>
        <div class="input_f">
            <form  method="POST">
                <div class="input_filed">
                    <label for="">USERNAME :</label>
                    <input class="input" name ="username"  value="<?php if (isset($_COOKIE['user_login'])){ echo  $_COOKIE['user_login'];  } ?>"  type="text" required="required" placeholder="username">
                </div>
                <div class="input_filed">
                    <label for="">PASSWORD :</label>
                    <input class="input" name ="password"  value="<?php if (isset($_COOKIE['user_password'])){ echo  $_COOKIE['user_password'];  } ?>" type="password" required="required" placeholder="password">
                </div>
                <div class="input_filed">
                    <input type="checkbox" name="remember"  <?php if(isset($_COOKIE['user_login'])){ ?> checked <?php } ?>  id="remember">
                    <label for="remember"> Remember Me</label>
                </div>
                <div class="input_filed">
                    <input type="submit" value="LOGIN" class="btn">
                </div>
                <p id="comment"></p>
                <script>
                        var log = document.getElementById("comment");
                        log.style.color="red";
                        
                        log.innerHTML= "กรุณาใส่ข้อมูลให้ถูกต้อง";
                </script>
            </form>
        </div>
    </div> 
</body>
</html>






