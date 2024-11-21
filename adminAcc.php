<?php
require_once('Config/script.php');
session_start();
if (!isset($_SESSION["Username"])) {
  header("location:loginAdmin.php");
}
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="globals.css" />
    <link rel="stylesheet" href="style.css" />
        <link rel="stylesheet" href="CSS/adminAcc.css" />
  </head>
  <body>
    <div class="qun-l-khch-hng">
      <div class="div">
        <div class="overlap">
          <img class="rectangle" src="image/Rectangle 6648.png" />
          <div class="rectangle-2"></div>
                  <div class="text-wrapper-logout"><a href="logout.php">Đăng xuất</div></a>
          <img class="profile-avtar" src="image/Profile.png" />
          <?php
        $select = "SELECT * FROM account";
        $query = mysqli_query($con, $select);
        $result = mysqli_fetch_assoc($query);
        ?>
        <div class="sales-info-search">
          <div class="text-wrapper">Chào mừng <?php echo $result['Username']; ?></div>
        </div>
          <div class="rectangle-3"></div>
          <div class="table">
            <div class="frame">
              <div class="navbar">
                <div class="text-wrapper-2">Tên tài khoản</div>
                <div class="text-wrapper-3">Mật khẩu</div>
                <div class="text-wrapper-4">Loại tài khoản</div>
                <img class="minus-square" src="image/minus-square.png" />
              </div>
              <?php
$sql = "SELECT * from account";
$result = mysqli_query($con, $sql);
if ($result) {
    $firstAccount = true; // A flag to identify the first account
    while ($row = mysqli_fetch_assoc($result)) {
        $id = $row['AccID'];
        $name = $row['Username'];  
        $pass = $row['Password'];
        $role = $row['Role'];
        ?>
        <div class="navbar-2">
            <div class="text-wrapper-8"><?php echo $row['Username']; ?></div>
            <div class="text-wrapper-9"><?php echo str_repeat('*', strlen($pass)); ?></div>
            <div class="text-wrapper-12"><?php echo $row['Role']; ?></div>
            <div class="text-wrapper-id"><?php echo $row['AccID']; ?></div>             

            <?php if (!$firstAccount) { ?>
                <div class="text-wrapper-edit"><a href="edit_acc.php?updateid=<?php echo $row['AccID']; ?>">Sửa</a></div>
                <div class="text-wrapper-delete"><a href="delete_acc.php?deleteid=<?php echo htmlspecialchars($row['AccID'], ENT_QUOTES, 'UTF-8'); ?>" onclick="return confirm('Bạn có chắc chắn muốn xóa?');">Xóa</a></div>
            <?php } ?>

        </div>
        <?php
        // After rendering the first account, set the flag to false
        $firstAccount = false;
    }
}
?>
            </div>
          </div>
          <div class="frame-2">
            <div class="group">
              <button class="button"><input type="text" placeholder="Nhập tên tài khoản"></button>
              <div class="text-wrapper-15">Tên tài khoản</div>  
            </div>
            <div class="group">
              <button class="button"><input type="text" placeholder="Nhập loại tài khoản"></button>
              <div class="text-wrapper-15">Loại tài khoản</div>
            </div>
          </div>
        </div>
        <div class="overlap-2">
          <div class="active"></div>
          <div class="sidebar">
            <div class="frame-4">
              <div class="text-wrapper-16"> <a href="adminMain.php"> Trang chủ</div></a>
                <img class="img-2" src="image/element-3.png" />
                <div class="group-3">
                  <div class="text-wrapper-17"> <a href="adminCustomer.php">Khách hàng</div></a>
                  <img class="img-2" src="image/face.png" />
                </div>
                <div class="group-4">
                  <div class="text-wrapper-18"><a href="adminTicket.php">Quản lý vé</div></a>
                  <img class="img-2" src="image/board.png" />
                </div>
              <div class="group-5">
                <div class="text-wrapper-19"><a href="adminPlane.php">Chuyến bay</div></a>
                  <img class="group-6" src="image/Plane.png" />
              </div>
              <div class="group-7">
                <div class="text-wrapper-18"><a href="adminEmploye.php"> Nhân viên</div></a>
                <img class="img-2" src="image/person.png" />
              </div>
              <div class="group-8">
                <div class="text-wrapper-20"><a-main href="adminAcc.php">Tài khoản</div></a> 
                <img class="img-2" src="image/empty-wallet_blue.png" />
              </div>
              <div class="group-9">
                <div class="text-wrapper-18">Dịch vụ</div>
                <img class="img-2" src="image/star.png "/>
                <div class="setting"></div>
              </div>
            </div>
          </div>
          <div class="logo"><div class="text-wrapper-21">Khách hàng</div></div>
        </div>
      </div>
    </div>
  </body>
</html>