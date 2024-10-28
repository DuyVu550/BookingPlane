<?php
require_once('Config/script.php'); 

// Fetch locations from the database
$query = "SELECT Tinh FROM sanbay"; 
$result = mysqli_query($con, $query);
$locations = [];

if ($result) {
    while ($row = mysqli_fetch_assoc($result)) {
        $locations[] = $row['Tinh'];
    }
}
?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="CSS/homePage.css" />
</head>

<body>
  <div class="trang-chu">
    <div class="overlap-wrapper">
      <div class="overlap">
        <img class="image" src="image/image.png" />
        <div class="rectangle"></div>
        <div class="div"></div>
        <div class="ng-k-button">
          <div class="overlap-group">
            <div class="text-wrapper">Đăng ký</div>
          </div>
        </div>
        <div class="ng-nhp-button">
          <div class="div-wrapper">
            <div class="text-wrapper-2">Đăng nhập</div>
          </div>
          <div class="navbar">
            <div class="text-wrapper-3">Vé máy bay</div>
            <div class="text-wrapper-3">Khách sạn</div>
            <div class="text-wrapper-3">Thuê xe</div>
            <div class="text-wrapper-3">Khuyến mãi</div>
            <div class="text-wrapper-3">Hướng dẫn</div>
            <div class="text-wrapper-3">Đối tác</div>
          </div>
        </div>
        <p class="p">CẢ THẾ GIỚI CHỈ VỎN VẸN TRONG BÀN TAY</p>
        <form class="Search-Form" action="ListVe.php" method="POST">
          <label for="DiemDen">Điểm đến:</label>
          <select class="Go" name="DiemDen" id="DiemDen" required>
        <option value="">Chọn điểm đến</option>
        <?php foreach ($locations as $location) : ?>
            <option value="<?php echo htmlspecialchars($location); ?>"><?php echo htmlspecialchars($location); ?></option>
        <?php endforeach; ?>
    </select>

    <label for="DiemDi">Điểm đi:</label>
    <select class="Back" name="DiemDi" id="DiemDi" required>
        <option value="">Chọn điểm đi</option>
        <?php foreach ($locations as $location) : ?>
            <option value="<?php echo htmlspecialchars($location); ?>"><?php echo htmlspecialchars($location); ?></option>
        <?php endforeach; ?>
    </select>
      
          <label for="Datego">Ngày đi:</label>
          <input type="date" class="Datego" name="Datego" id="Datego" required>
      
          <label for="Dateback">Ngày về:</label>
          <input type="date" class="Dateback" name="Dateback" id="Dateback">
      
          <div class="rectangle-8"></div>
          <div class="text-wrapper-13">Một chiều</div>
          <div class="text-wrapper-14">Khứ hồi</div>
          <div class="text-wrapper-15">Ngày về</div>
          <button type="submit" class="rectangle-2">
          <div class="text-wrapper-4">Đặt vé ngay !</div>
        </button>   
        </form>

        <img class="left-arrow" src="image/Left Arrow.png" />
        <img class="vector" src="image/Vector.png" />
        <img class="person-add-alt" src="image/Person add alt 1.png" />
        <p class="t-v-ngay-nh-n-ng-n">
          Đặt vé ngay ! Nhận ngàn chuyến bay !<br />Giảm ngay 20% khi đặt chuyến bay<br />đến Munch (Đức)
        </p>
        <img class="line" src="image/Line 1.png" />
        <img class="location" src="image/Location copy.png" />
        <img class="location-2" src="image/Location.png" />
        <img class="right-arrow" src="image/Right Arrow.png" />
        <img class="image-2" src="image/image 1.png" />
        <div class="rectangle-9"></div>
        <p class="lorem-ipsum-dolor">
          &#34;Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
          dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex
          ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat
          nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit
          anim id est laborum.&#34;<br /><br />Lorem Ipsum<br />Lorem Ipsum<br />Lorem
          Ipsum<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          &#34;Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
          dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex
          ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat
          nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit
          anim id est laborum.&#34;
        </p>
      </div>
    </div>
  </div>
</body>

</html>