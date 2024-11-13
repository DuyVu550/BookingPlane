<?php
require_once('Config/script.php'); 
error_reporting(0);
session_start();	
if(!isset($_SESSION["Username"]))
{
  echo "Welcome ".$_SESSION['Username']; 
  header("location:loginAdmin.php");
}
session_destroy();
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="globals.css" />
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="CSS/adminMain.css" />
  </head>
  <body>
    <div class="admin-trang-ch">
      <div class="div">
        <div class="overlap">
          <img class="rectangle" src="image/Rectangle 6646.png" />
          <div class="rectangle-2"></div>
          <div class="text-wrapper-logout"><a href="logout.php">Đăng xuất</div></a>
          <img class="profile-avtar" src="image/Profile.png" />
          <?php
          $select="SELECT * FROM account";
          $query=mysqli_query($con,$select);
          $result=mysqli_fetch_assoc($query);
          ?>
          <div class="sales-info-search"><div class="text-wrapper">Chào mừng <?php echo $result['Username'];?></div></div>
          <?php if(isset($_GET['error'])){?>
          <p class="error"><?php echo $_GET['error']; ?></p>
        <?php }
        ?>
          <div class="group">
            <div class="overlap-group">
              <div class="rectangle-3"></div>
              <div class="overlap-wrapper">
                <div class="overlap-2">
                  <div class="text-wrapper-2">150</div>
                  <div class="overlap-group-wrapper">
                    <div class="overlap-group-2">
                      <div class="text-wrapper-3">Chuyến bay hôm nay</div>
                      <img class="img" src="image/Plane.png" />
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="div-wrapper">
            <div class="overlap-3">
              <div class="rectangle-4"></div>
              <div class="group-2">
                <div class="text-wrapper-4">500</div>
                <div class="group-3"><p class="p">Số vé bay hôm nay</p></div>
              </div>
            </div>
          </div>
          <div class="group-4">
            <div class="overlap-group">
              <div class="rectangle-5"></div>
              <div class="group-5">
                <div class="overlap-2">
                  <div class="text-wrapper-5">150</div>
                  <div class="group-6">
                    <div class="overlap-group-3">
                      <div class="text-wrapper-6">Số lượng chuyến bay</div>
                      <div class="group-7">
                        <img class="img" src="image/Plane.png" />
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="group-wrapper">
            <div class="group-8">
              <div class="text-wrapper-7">20,000</div>
              <div class="group-9">
                <div class="text-wrapper-8">Số lượng khách hàng</div>
                <img class="face" src="image/face.png" />
              </div>
            </div>
          </div>
          <div class="group-10">
            <div class="group-11">
              <div class="text-wrapper-9">50.000.000 VND</div>
              <div class="group-12">
                <div class="text-wrapper-10">Tổng doanh thu tháng</div>
                <div class="local-atm">
                <img class="vector-4" src="image/graymoney.png" />
                </div>
              </div>
            </div>
          </div>
          <div class="group-13">
            <div class="group-14">
              <div class="text-wrapper-11">3,000</div>
              <div class="group-15">
                <div class="text-wrapper-12">Số lượng nhân viên</div>
                <img class="person" src="image/person.png" />
              </div>
            </div>
          </div>
          <div class="rectangle-6"></div>
          <div class="group-16">
            <div class="group-17">
              <div class="overlap-group-4">
                <div class="text-wrapper-13">28,000</div>
                <div class="group-18">
                  <div class="text-wrapper-14">Số lượng vé bay</div>
                  <img class="picture-in-picture" src="image/board.png" />
                  <img class="picture-in-picture-2" src="image/board.png" />
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="overlap-4">
          <div class="active"></div>
          <div class="sidebar">
            <div class="frame">
              <div class="group-19">
                <div class="text-wrapper-15"><a-main href="adminMain.html">Trang chủ</div></a>
                <img class="img-2" src="image/menu.png" />
              </div>
              <div class="group-20">
                <div class="text-wrapper-16"><a href="adminCustomer.php" >Khách hàng</div></a>
                <img class="img-2" src="image/face.png" />
              </div>
              <div class="group-21">
                <div class="text-wrapper-17"><a href="adminTicket.html">Quản lý vé</div></a>
                <img class="img-2" src="image/board.png" />
              </div>
              <div class="group-22">
                <div class="text-wrapper-18"><a href="adminPlane.html"> Chuyến bay</div></a>
                <img class="img-3" src="image/Plane.png" />
              </div>
              <div class="group-24">
                <div class="text-wrapper-17"><a href="adminEmploye.html"> Nhân viên</div></a>
                <img class="img-2" src="image/person.png" />
              </div>
              <div class="group-25">
                <div class="text-wrapper-19"><a href="adminAcc.html">Tài khoản</div></a> 
                <div class="empty-wallet"></div>
                <img class="empty-wallet" src="image/empty-wallet.png" />
              </div>
              <div class="group-26">
                <div class="text-wrapper-17">Dịch vụ</div>
                <div class="setting"></div>
                <img class="star" src="image/star.png" />
              </div>
            </div>
          </div>
          <div class="logo"><div class="text-wrapper-20">Trang chủ</div></div>
        </div>
        <img class="rectangle-7" src="img/rectangle-6647.svg" />
      </div>
    </div>
  </body>
</html>