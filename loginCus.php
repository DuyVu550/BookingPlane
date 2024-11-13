<?php

$host="localhost";
$user="root";
$password="";
$db="horseair";
error_reporting(0);
session_start();


$data=mysqli_connect($host,$user,$password,$db);
if($data==false)
{
  die("Có lỗi xảy ra");
}

if($_SERVER["REQUEST_METHOD"]=="POST")
{
  $username=$_POST["Username"];
  $password=$_POST["Password"];
  
  $sql="select * from account where Username='".$username."' AND Password='".$password."'
  ";

  $result=mysqli_query($data,$sql);
  $row=mysqli_fetch_array($result);

  if ($row["Role"]=="Khách hàng")
  {
    $_SESSION["Username"]=$username;
    $_SESSION["Role"]="Khách hàng";
    header("location:homePage.php");
  }
  elseif($row["Role"]=="Admin")
  {
    echo "<script> alert('Tài khoản hoặc mật khẩu không đúng') </script>";    
  }
  else
  {
    echo "<script> alert('Tài khoản hoặc mật khẩu không đúng') </script>";    
  }
}

?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">

    <link rel="stylesheet" href="globals.css" />
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="CSS/loginCus.css" />
  </head>
  <body>
    <div class="ng-nh-p-kh-ch">
        <img class="image" src="image/dawn.jpg" />
        <div class="rectangle-2"></div>
        <img class="rectangle-6649" src="image/Rectangle 6649.png" />
        <img class="rectangle-5" src="image/Rectangle 5.png" />
        <div class="ng-nh-p"><form method="post"><input type="submit" value="Đăng nhập"></div>
        <div class="ng-nh-p-t-i-kho-n">ĐĂNG NHẬP TÀI KHOẢN</div>
        <div class="rectangle-6650"><input type="text" name="Username" required></div>
        <div class="t-n-t-i-kho-n">Tên tài khoản</div>
        <div class="rectangle-66502"><input type="password" name="Password" required></div>
        <div class="m-t-kh-u">Mật khẩu</div>
        <div class="ch-a-c-t-i-kho-n-ng-k-ngay">
          <span>
            <span class="ch-a-c-t-i-kho-n-ng-k-ngay-span">Chưa có tài khoản?</span>
            <span class="ch-a-c-t-i-kho-n-ng-k-ngay-span2"><a href="register.html"> Đăng ký ngay</span>
          </span>
        </div>
      </div>
  </body>
</html>