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
      // Get the user input from the POST request
      $account = $_POST["account"];
      $email = $_POST["email"];
      $pass = $_POST["pass"];
      $repass = $_POST["repass"];

      // Validate email format
      if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "<script> alert('Email không hợp lệ!') </script>";
      } else {
        $insertKhachHangQuery = "INSERT INTO KhachHang (Email) VALUES (?)";

        if ($stmtKhachHang = mysqli_prepare($con, $insertKhachHangQuery)) {
          mysqli_stmt_bind_param($stmtKhachHang, "s", $email);

          if (mysqli_stmt_execute($stmtKhachHang)) {
            $MaKH = mysqli_insert_id($con);
            if ($pass == $repass) {
              $insertAccountQuery = "INSERT INTO Account (Username, Password, Role, MaKH, MaNV) 
                                             VALUES (?, ?, 'Khach', ?, ?)";

              if ($stmtAccount = mysqli_prepare($con, $insertAccountQuery)) {

                $MaNV = NULL;

                mysqli_stmt_bind_param($stmtAccount, "ssii", $account, $pass, $MaKH, $MaNV);

                if (mysqli_stmt_execute($stmtAccount)) {
                  echo "<script> alert('Đăng ký thành công!') </script>";
                } else {
                  echo "<script> alert('Lỗi khi đăng ký vào Account. Vui lòng thử lại!') </script>";
                }
                mysqli_stmt_close($stmtAccount);
              } else {
                echo "Error preparing Account insert query: " . mysqli_error($con);
              }
            } else {
              echo "<script> alert('Mật khẩu không khớp') </script>";
            }
          } else {
            echo "<script> alert('Lỗi khi đăng ký vào KhachHang. Vui lòng thử lại!') </script>";
          }
          mysqli_stmt_close($stmtKhachHang);
        } else {
          echo "Error preparing KhachHang insert query: " . mysqli_error($con);
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