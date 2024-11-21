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
  <link rel="stylesheet" href="CSS/adminEmploye.css" />
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
              <div class="text-wrapper-3">Tên nhân viên</div>
              <div class="text-wrapper-4">Địa chỉ</div>
              <div class="text-wrapper-5">Số điện thoại</div>
              <div class="overlap-group">
                <div class="text-wrapper-6">Ngày sinh</div>
              </div>
              <div class="text-wrapper-7">Giới tính</div>
              <div class="text-wrapper-job">Công việc</div>
              <div class="text-wrapper-money">Lương</div>
              <img class="minus-square" src="image/minus-square.png" />
            </div>
            <?php
            $sql = "SELECT * from nhanvien";
            $result = mysqli_query($con, $sql);
            if ($result) {
              while ($row = mysqli_fetch_assoc($result)) {
                $id = $row['MaNV'];
                $name = $row['TenNV'];
                $locate = $row['DiaChi'];
                $sdt = $row['SDT'];
                $date = $row['NgaySinh'];
                $gen = $row['GioiTinh'];
                $job = $row['CongViec'];
                $formatted_amount = number_format($row['Luong'], 0, ',', '.');

            ?>

                <div class="navbar-2">
                  <div class="text-wrapper-8"><?php echo $row['TenNV']; ?></div>
                  <div class="text-wrapper-9"><?php echo $row['DiaChi']; ?></div>
                  <div class="text-wrapper-10"><?php echo $row['GioiTinh']; ?></div>
                  <div class="text-wrapper-11"><?php echo $row['CongViec']; ?></div>
                  <div class="text-wrapper-12"><?php echo $row['SDT']; ?></div>
                  <div class="text-wrapper-13"><?php echo $row['NgaySinh']; ?></div>
                  <div class="text-wrapper-money"><?php echo $formatted_amount ?></div>
                  <div class="text-wrapper-id"><?php echo $row['MaNV']; ?></div>
                  <div class="text-wrapper-edit"><a href="edit_employee.php?updateid=<?php echo $row['MaNV']; ?>">Sửa</a></div>
                  <div class="text-wrapper-delete"><a href="delete_employee.php?deleteid=<?php echo htmlspecialchars($row['MaNV'], ENT_QUOTES, 'UTF-8'); ?>" onclick="return confirm('Bạn có chắc chắn muốn xóa?');">Xóa</a>
                  </div>
                </div>
            <?php
              }
            }
            ?>
          </div>
        </div>
        <div class="frame-2">
          <div class="group">
            <button class="button"><input type="text" placeholder="Nhập tên nhân viên"></button>
            <div class="text-wrapper-15">Tên nhân viên </div>
          </div>
          <div class="group-2">
            <button class="button"><input type="text" placeholder="Nhập địa chỉ"></button>
            <div class="text-wrapper-15">Địa chỉ</div>
          </div>
          <div class="group">
            <button class="button"><input type="text"></button>
            <div class="text-wrapper-15">Số điện thoại</div>
          </div>
          <div class="group">
            <button class="button"><input type="text" placeholder="dd/mm/yyyy"></button>
            <div class="text-wrapper-15">Ngày sinh</div>
          </div>
        </div>
        <div class="frame-3">
          <div class="group">
            <button class="button"><input type="text"></button>
            <div class="text-wrapper-15">Giới tính</div>
          </div>
          <div class="group-2">
            <button class="button"><input type="text"></button>
            <div class="text-wrapper-15">Công việc</div>
          </div>
          <div class="group-2">
            <button class="button"><input type="text"></button>
            <div class="text-wrapper-15">Lương </div>
          </div>
          <div class="group-2">
            <form action="insert_cus.php" method="get"><a href="insert_employee.php"><input type="button" class="btn-primary" value="Thêm nhân viên">
          </div></a>
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
              <div class="text-wrapper-18"><a-main href="adminEmploye.php">Nhân viên</div></a-main>
              <img class="img-2" src="image/person_blue.png" />
            </div>
            <div class="group-8">
              <div class="text-wrapper-20"><a href="adminAcc.php"> Tài khoản</div></a>
              <img class="img-2" src="image/empty-wallet.png" />
            </div>
            <div class="group-9">
              <div class="text-wrapper-18">Dịch vụ</div>
              <img class="img-2" src="image/star.png " />
              <div class="setting"></div>
            </div>
          </div>
        </div>
        <div class="logo">
          <div class="text-wrapper-21">Nhân viên</div>
        </div>
      </div>
    </div>
  </div>
</body>

</html>