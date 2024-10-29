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
    echo "Tài khoản không có thẩm quyền truy cập";
  }
  elseif($row["Role"]=="Admin")
  {
    $_SESSION["Username"]=$username;
    $_SESSION["Role"]="Admin";
    header("location:adminMain.php");
  }
  else
  {
    $message= "Tên đăng nhập hoặc mật khẩu không đúng";
    echo $_SESSION['loginMessage']=$message;
  }
}

?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="globals.css" />
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="CSS/loginAdmin.css"/>
  </head>
  <body>
    <div class="ng-nh-p-kh-ch">
        <img class="image" src="image/city.png" />
        <div class="rectangle-2"></div>
        <img class="rectangle-6649" src="image/Rectangle 6649 (2).png" />
        <div class="ng-nh-p"><form method="post"><input type="submit" value="Đăng nhập"></div>
        <div class="ng-nh-p-t-i-kho-n">ĐĂNG NHẬP TÀI KHOẢN</div>
        <div class="rectangle-6650"><input type="text" name="Username" required></div>
        <div class="t-n-t-i-kho-n">Tên tài khoản</div>
        <div class="rectangle-66502"><input type="password" name="Password" required></div>
        <div class="m-t-kh-u">Mật khẩu</div>
        <div class="ch-a-c-t-i-kho-n-ng-k-ngay">
        </div>
      </div>
  </body>
</html>