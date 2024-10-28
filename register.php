<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" />
  <link rel="stylesheet" href="globals.css" />
  <link rel="stylesheet" href="style.css" />
  <link rel="stylesheet" href="CSS/register.css" />
</head>

<body>
  <div class="ng-k">
    <?php
    require_once('Config/script.php');      
    ?>
    <?php
    if (isset($_POST["register"])) {
      $account = $_POST["account"];
      $email = $_POST["email"];
      $pass = $_POST["pass"];
      $repass = $_POST["repass"];   
      $randomid = (rand(1,1000000));    
      $result = mysqli_query($con, "Select * from Account where Username = '$account' or Password = '$pass'");
      if(mysqli_num_rows($result) > 0){
        echo "<script> alert('Tên người dùng hoặc mật khẩu đã tồn tại') </script>";
      }
      else{
        if($pass == $repass){
          $query = "insert into Account values ('$randomid','$account', '$pass','Khach','$randomid','0')";
          mysqli_query($con, $query);
          echo "<script> alert('Đăng ký thành công') </script>";    
        }
      }
    }
    ?>
    <form action="register.php" method="post">
      <img class="image" src="image/island-01.jpg" />
      <div class="rectangle-2"></div>
      <img class="rectangle-6649" src="image/Rectangle 6649 (1).png" />
      <div class="ng-k2"><input type="submit" value="Đăng ký" name="register"></div>
      <div class="ng-k-t-i-kho-n">ĐĂNG KÝ TÀI KHOẢN</div>
      <div class="rectangle-6650"><input type="text" name="account"></div>
      <div class="t-i-kho-n">Tài khoản</div>
      <div class="rectangle-66502"><input type="text" name="email"></div>
      <div class="email">Email</div>
      <div class="rectangle-66503"><input type="password" placeholder="Mật khẩu" name="pass"></div>
      <div class="m-t-kh-u">Mật khẩu</div>
      <div class="rectangle-66504"><input type="password" placeholder="Nhập lại mật khẩu" name="repass"></div>
      <div class="nh-p-l-i-m-t-kh-u">Nhập lại mật khẩu</div>
      <div class="c-t-i-kho-n-ng-nh-p-ngay">
        <span>
          <span class="c-t-i-kho-n-ng-nh-p-ngay-span">Đã có tài khoản?</span>
          <span class="c-t-i-kho-n-ng-nh-p-ngay-span2"><a href="loginCus.html">Đăng nhập ngay</span>
        </span>
      </div>
    </form>
  </div>
</body>

</html>