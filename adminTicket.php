<?php
require_once('Config/script.php'); 
session_start();
if(!isset($_SESSION["Username"]))
{
  header("location:loginAdmin.php");
}
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="globals.css" />
    <link rel="stylesheet" href="style.css" />
        <link rel="stylesheet" href="CSS/adminTicket.css" />
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
                <div class="text-wrapper-2">Mã vé</div>
                <div class="text-wrapper-3">Mã chuyến bay</div>
                <div class="text-wrapper-4">Tên khách hàng</div>
                <div class="text-wrapper-5">Số ghế</div>
                <div class="overlap-group">
                  <div class="text-wrapper-6">Loại ghế</div>
                </div>
                <div class="text-wrapper-7">Tình trạng</div>
                <div class="text-wrapper-giatb">Tổng giá</div>
                <img class="minus-square" src="image/minus-square.png" />
              </div>
              <?php
            $sql = "select * from ve, khachhang, ghe, maybay";
            $result = mysqli_query($con, $sql);
            if ($result) {
              while ($row = mysqli_fetch_assoc($result)) {
                $id = $row['MaVe'];
                $cb = $row['MaChuyenBay'];
                $name= $row['TenKH'];
                $chair = $row['Loai'];
                $chair_number = $row['MaGhe'];
                $condition = $row['TinhTrang'];
                $price = $row['Gia'];

            ?>
            
                <div class="navbar-2">
                  <div class="text-wrapper-8"><?php echo $row['MaVe']; ?></div>
                  <div class="text-wrapper-9"><?php echo $row['MaChuyenBay']; ?></div>
                  <div class="text-wrapper-10"><?php echo $row['Loai']; ?></div>
                  <div class="text-wrapper-11"><?php echo $row['TinhTrang']; ?></div>
                  <div class="text-wrapper-12"><?php echo $row['TenKH']; ?></div>
                  <div class="text-wrapper-13"><?php echo $row['MaGhe']; ?></div>
                  <div class="text-wrapper-id"><?php echo $row['Gia']; ?></div>                 
                  <div class="text-wrapper-edit"><a href="edit_cus.php?updateid=<?php echo $row['MaKH']; ?>">Sửa</a></div>
                  <div class="text-wrapper-delete"><a href="delete_cus.php?deleteid=<?php echo htmlspecialchars($row['MaKH'], ENT_QUOTES, 'UTF-8'); ?>" onclick="return confirm('Bạn có chắc chắn muốn xóa?');">Xóa</a>
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
              <button class="button"><input type="text" placeholder="Nhập mã vé"></button>
              <div class="text-wrapper-15">Mã vé</div>
            </div>
            <div class="group">
              <button class="button"><input type="text" placeholder="Nhập mã chuyến bay"></button>
              <div class="text-wrapper-15">Mã chuyến bay</div>
            </div>
            <div class="group-2">
              <button class="button"><input type="text" placeholder="Nhập tên khách hàng"></button>
              <div class="text-wrapper-15">Tên khách hàng</div>
            </div>
          </div>
          <div class="frame-3">
            <div class="group">
              <button class="button"><input type="text" ></button>
              <div class="text-wrapper-15">Số ghế</div>
            </div>
            <div class="group">
              <button class="button"><input type="text" ></button>
              <div class="text-wrapper-15">Loại ghế</div>
            </div>
            <div class="group-2">
              <button class="button"><input type="text" ></button>
              <div class="text-wrapper-15">Tình trạng</div>
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
                <div class="text-wrapper-18"><a-main href="adminTicket.php">Quản lý vé</div></a>
                <img class="img-2" src="image/picture_in_picture_alt.png" />
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
                <div class="text-wrapper-20"><a href="adminAcc.php"> Tài khoản</div></a>
                <img class="img-2" src="image/empty-wallet.png" />
              </div>
              <div class="group-9">
                <div class="text-wrapper-18">Dịch vụ</div>
                <img class="img-2" src="image/star.png "/>
                <div class="setting"></div>
              </div>
            </div>
          </div>
          <div class="logo"><div class="text-wrapper-21">Quản lý vé</div></div>
        </div>
      </div>
    </div>
  </body>
</html>