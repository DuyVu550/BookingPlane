<?php

require_once('Config/script.php');
$query = "Select * from bookplan";
$result = mysqli_query($con, $query);


?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" />
  <link rel="stylesheet" href="globals.css" />
  <link rel="stylesheet" href="CSS/List.css" />
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">

</head>

<body>
  <div class="trang-t-v">
    <div class="slide-wrapper">
      <div class="slide">
        <div class="overlap">
          <img class="image" src="image/image.png" />
          <div class="rectangle"></div>
          <div class="div"></div>
          <div class="rectangle-2"></div>
          <img class="img" src="image/image 11.png" />
          <img class="rectangle-3" src="image/Rectangle 15.png" />
          <div class="rectangle-4"></div>
          <button class="rectangle-5"></button>
          <div class="rectangle-6"></div>
          <div class="rectangle-7"></div>
          <div class="rectangle-8"></div>
          <p class="text-wrapper">Th 3, 24 thg 9</p>
          <p class="p">Th 4, 25 thg 9</p>
          <p class="text-wrapper-2">Th 5, 26 thg 9</p>
          <p class="text-wrapper-3">Th 2, 23 thg 9</p>
          <div class="text-wrapper-4">CN, 22 thg 9</div>
          <div class="ng-k-button">
            <div class="overlap-group">
              <div class="text-wrapper-5">Đăng ký</div>
            </div>
          </div>
          <div class="ng-nhp-button">
            <div class="div-wrapper">
              <div class="text-wrapper-6">Đăng nhập</div>
            </div>
            <div class="navbar">
              <div class="text-wrapper-7">Vé máy bay</div>
              <div class="text-wrapper-7">Khách sạn</div>
              <div class="text-wrapper-7">Thuê xe</div>
              <div class="text-wrapper-7">Khuyến mãi</div>
              <div class="text-wrapper-7">Hướng dẫn</div>
              <div class="text-wrapper-7">Đối tác</div>
            </div>
          </div>
          <div class="text-wrapper-8">Vé khứ hồi</div>
          <div class="rectangle-9"></div>
          <div class="text-wrapper-9">QUAY LẠI</div>
          <div class="rectangle-10"></div>
          <img class="line" src="image/Line 4.png" />
          <div class="text-wrapper-10">3.265.000VND</div>
          <div class="text-wrapper-11">10 chuyến bay</div>
          <div class="text-wrapper-12">Giá thấp nhất</div>
          <div class="text-wrapper-13">Chuyến đi</div>
          <p class="text-wrapper-14">Th 3, 24 thg 9</p>
          <div class="text-wrapper-15">Chuyến về</div>
          <div class="text-wrapper-16">Hành khách</div>
          <p class="text-wrapper-17">Th 5, 26 thg 9</p>
          <img class="line-2" src="image/Line 1.png" />
          <div class="TP-h-ch-minh">TP. <br />Hồ Chí Minh</div>
          <div class="text-wrapper-18">Đã tìm thấy</div>
          <div class="text-wrapper-19">Hà Nội</div>
          <img class="image-2" src="image/image 4.png" />
          <img class="image-3" src="image/image 5.png" />
          <img class="line-3" src="image/Line 2.png" />
          <img class="line-4" src="image/Line 2.png" />
          <div class="group">
            <div class="text-wrapper-20">1</div>
            <img class="image-4" src="image/image 2.png" />
          </div>
          <div class="rectangle-11"></div>
          <img class="image-5" src="image/image 10.png" />

          <div class="table1">


            <?php
            while ($row = mysqli_fetch_assoc($result)) {
            ?>
              <div class="card">
                <div class="rectangle-12">
                  <div class="flex-container">
                    <div class="row-container">
                      <i></i>
                      <label class="location"> <?php echo $row['DiemDi']; ?> </d> </label>
                      <img class="line-5" src="image/Line 5.png" />
                      <label class="date"> <?php echo $row['KhoiHanh']; ?> </d> </label>
                      <div><img class="access-time" src="image/access_time.png" /><label class="label"> <?php echo $row['ThoiGian']; ?> </d> </label></div>
                    </div>
                    <div class="row-container">
                      <i></i>
                      <label class="location"> <?php echo $row['DiemDen']; ?> </d> </label>
                      <img class="line-5" src="image/Line 5.png" />
                      <label class="date"> <?php echo $row['KhoiHanh']; ?> </d> </label>
                      <div><img class="access-time" src="image/access_time.png" /><label class="label"> <?php echo $row['ThoiGian']; ?> </d> </label></div>
                    </div>
                    


                  </div>
                  <div class="text-wrapper-26">Hạng thường</div>
                  <div class="text-wrapper-21">3.265.000VND</div>
                  <div class="rectangle-20"></div>
                  <div class="text-wrapper-55">Xem Vé</div>
                </div>
              </div>

            <?php

            }
            ?>
          </div>


          <p class="text-wrapper-22">Có thể có thêm ngày cho lựa chọn chuyến bay của Quý khách!</p>
          <div class="text-wrapper-23">Chọn ngày khác</div>

          

          <button class="sort">
            <div class="sort-text">
              <div class="text-wrapper">Hiển thị bộ lọc</div>
            </div>
          </button>



        </div>
      </div>
    </div>
  </div>
</body>

</html>