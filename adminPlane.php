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
        <link rel="stylesheet" href="CSS/adminPlane.css" />
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
                <div class="text-wrapper-2">Mã chuyến bay</div>
                <div class="text-wrapper-3">Mã máy bay</div>
                <div class="text-wrapper-4">Ngày khởi hành</div>
                <div class="text-wrapper-5">Sân bay khởi hành</div>
                <div class="overlap-group">
                  <div class="text-wrapper-6">Sân bay cập bến</div>
                </div>
                <div class="text-wrapper-7">Thời gian khởi hành</div>
                <img class="minus-square" src="image/minus-square.png" />
              </div>
              <?php
            $sql = "SELECT * from chuyenbay JOIN sanbay ON chuyenbay.MaSB1=sanbay.MaSB";
            $result = mysqli_query($con, $sql);
            if ($result) {
              while ($row = mysqli_fetch_assoc($result)) {
                $id = $row['MaChuyenBay'];
                $maybay = $row['MaMB'];
                $date = $row['KhoiHanh'];
                $time = $row['ThoiGian'];
                $san1 = $row['MaSB1'];
                $san2 = $row['MaSB2'];

            ?>
            
                <div class="navbar-2">
                  <div class="text-wrapper-8"><?php echo $row['MaChuyenBay']; ?></div>
                  <div class="text-wrapper-9"><?php echo $row['MaMB']; ?></div>
                  <div class="text-wrapper-10"><?php echo $row['MaSB2']; ?></div>
                  <div class="text-wrapper-11"><?php echo $row['ThoiGian']; ?></div>
                  <div class="text-wrapper-12"><?php echo $row['KhoiHanh']; ?></div>
                  <div class="text-wrapper-13"><?php echo $row['MaSB1']; ?></div>
                  <div class="text-wrapper-edit"><a href="edit_plane.php?updateid=<?php echo $row['MaChuyenBay']; ?>">Sửa</a></div>
                  <div class="text-wrapper-delete"><a href="delete_plane.php?deleteid=<?php echo htmlspecialchars($row['MaChuyenBay'], ENT_QUOTES, 'UTF-8'); ?>" onclick="return confirm('Bạn có chắc chắn muốn xóa?');">Xóa</a>
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
              <button class="button"><input type="text" placeholder="Nhập mã chuyến bay"></button>
              <div class="text-wrapper-15">Mã chuyến bay</div>
            </div>
            <div class="group">
              <button class="button"><input type="text" placeholder="Nhập mã máy bay"></button>
              <div class="text-wrapper-15">Mã máy bay</div>
            </div>
            <div class="group-2">
              <button class="button"><input type="text" placeholder="dd/mm/yyyy"></button>
              <div class="text-wrapper-15">Ngày khởi hành</div>
            </div>
          </div>
          <div class="frame-3">
            <div class="group">
              <button class="button"><input type="text" ></button>
              <div class="text-wrapper-15">Sân bay khởi hành</div>
            </div>
            <div class="group">
              <button class="button"><input type="text" ></button>
              <div class="text-wrapper-15">Sân bay cập bến</div>
            </div>
            <div class="group-2">
              <button class="button"><input type="text" ></button>
              <div class="text-wrapper-15">Thời gian khởi hành</div>
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
                <div class="text-wrapper-19"><a-main href="adminPlane.php">Chuyến bay</div></a>
                <img class="group-6" src="image/Group.png" />
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
          <div class="logo"><div class="text-wrapper-21">Chuyến bay</div></div>
        </div>
      </div>
    </div>
  </body>
</html>