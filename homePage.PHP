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
        <p class="text-wrapper-16">Bay trên Pegasus ngay hôm nay !</p>
        <p class="trang-ch-v-m-y-bay">
          <span class="span">Trang Chủ</span>
          <span class="text-wrapper-17">&nbsp;&nbsp;&nbsp;&nbsp; &gt;&nbsp;&nbsp;&nbsp;&nbsp;Vé máy bay</span>
        </p>
        <div class="rectangle-11"></div>
        <div class="rectangle-12"></div>
        <div class="rectangle-13"></div>
        <div class="rectangle-14"></div>
        <div class="group">
          <img class="image-3" src="image/VanCouver.png" />
          <p class="t-singapore-n-TP-h">Từ TP. Hồ Chi Minh<br />Đến Đảo Vancouver</p>
          <p class="text-wrapper-18">Khởi hành lúc : 12/05/2025</p>
          <div class="text-wrapper-19">Giá chỉ từ :</div>
          <div class="element-VND">14.450.000 VND</div>
          <div class="text-wrapper-20">Eco / Một chiều</div>
          <div class="overlap-group-2">
            <div class="text-wrapper-21">Đặt ngay !</div>
          </div>
        </div>
        <div class="group-2">
          <img class="image-3" src="image/HoaKi.png" />
          <p class="t-singapore-n-TP-h">Từ TP. Hà Nội<br />Đến Hoa Kỳ</p>
          <p class="text-wrapper-18">Khởi hành lúc : 12/05/2025</p>
          <div class="text-wrapper-19">Giá chỉ từ :</div>
          <div class="element-VND-2">22.890.000 VND</div>
          <p class="eco-m-t-chi-u">Khứ hồi / Phổ thông</p>
          <div class="overlap-group-2">
            <div class="text-wrapper-21">Đặt ngay !</div>
          </div>
        </div>
        <div class="group-3">
          <img class="image-3" src="image/Nga.png" />
          <p class="t-singapore-n-TP-h">Từ TP. Hà Nội<br />Đến Nga</p>
          <p class="text-wrapper-18">Khởi hành lúc : 12/05/2025</p>
          <div class="text-wrapper-19">Giá chỉ từ :</div>
          <div class="element-VND-3">19.240.000 VND</div>
          <div class="text-wrapper-20">Eco / Một chiều</div>
          <div class="overlap-group-2">
            <div class="text-wrapper-21">Đặt ngay !</div>
          </div>
        </div>
        <div class="group-4">
          <img class="image-3" src="image/Nga.png" />
          <p class="t-singapore-n-TP-h">Từ TP. Hà Nội<br />Đến Nga</p>
          <p class="text-wrapper-18">Khởi hành lúc : 12/05/2025</p>
          <div class="text-wrapper-19">Giá chỉ từ :</div>
          <div class="element-VND-4">38.480.000 VND</div>
          <p class="eco-m-t-chi-u">Khứ hồi / Phổ thông</p>
          <div class="overlap-group-2">
            <div class="text-wrapper-21">Đặt ngay !</div>
          </div>
        </div>
        <div class="group-5">
          <img class="image-3" src="image/SanToni.png" />
          <p class="t-singapore-n-TP-h">Từ TP. Hồ Chí Minh<br />Đến Đảo Santorini</p>
          <p class="text-wrapper-18">Khởi hành lúc : 12/05/2025</p>
          <div class="text-wrapper-19">Giá chỉ từ :</div>
          <div class="element-VND-5">16.550.000 VND</div>
          <div class="text-wrapper-20">Eco / Một chiều</div>
          <div class="overlap-group-2">
            <div class="text-wrapper-21">Đặt ngay !</div>
          </div>
        </div>
        <div class="group-6">
          <img class="image-3" src="image/HoaKi.png" />
          <p class="t-singapore-n-TP-h">Từ TP. Hồ Chí Minh<br />Đến Hoa Kỳ</p>
          <p class="text-wrapper-18">Khởi hành lúc : 12/05/2025</p>
          <div class="text-wrapper-19">Giá chỉ từ :</div>
          <div class="element-VND-2">22.690.000 VND</div>
          <p class="eco-m-t-chi-u">Khứ hồi / Phổ thông</p>
          <div class="overlap-group-2">
            <div class="text-wrapper-21">Đặt ngay !</div>
          </div>
        </div>
        <div class="group-7">
          <img class="image-3" src="image/Nga.png" />
          <p class="t-singapore-n-TP-h">Từ TP. Hồ Chí Minh<br />Đến Nga</p>
          <p class="text-wrapper-18">Khởi hành lúc : 12/05/2025</p>
          <div class="text-wrapper-19">Giá chỉ từ :</div>
          <div class="element-VND-3">19.240.000 VND</div>
          <div class="text-wrapper-20">Eco / Một chiều</div>
          <div class="overlap-group-2">
            <div class="text-wrapper-21">Đặt ngay !</div>
          </div>
        </div>
        <div class="group-8">
          <img class="image-3" src="image/Nga.png" />
          <p class="t-singapore-n-TP-h">Từ TP. Hồ Chí Minh<br />Đến Nga</p>
          <p class="text-wrapper-18">Khởi hành lúc : 12/05/2025</p>
          <div class="text-wrapper-19">Giá chỉ từ :</div>
          <div class="element-VND-4">38.480.000 VND</div>
          <p class="eco-m-t-chi-u">Khứ hồi / Phổ thông</p>
          <div class="overlap-group-2">
            <div class="text-wrapper-21">Đặt ngay !</div>
          </div>
        </div>
        <div class="group-9">
          <img class="image-3" src="image/HaNoi.png" />
          <p class="t-singapore-n-TP-h">Từ Singapore<br />Đến TP. Hà Nội</p>
          <p class="text-wrapper-18">Khởi hành lúc : 15/05/2025</p>
          <div class="text-wrapper-19">Giá chỉ từ :</div>
          <div class="element-VND-6">1.370.000 VND</div>
          <div class="text-wrapper-20">Eco / Một chiều</div>
          <div class="overlap-group-2">
            <div class="text-wrapper-21">Đặt ngay !</div>
          </div>
        </div>
        <div class="group-10">
          <img class="image-3" src="image/Duc.png" />
          <div class="t-singapore-n-TP-h">Từ Hà Nội<br />Đến Đức</div>
          <p class="text-wrapper-18">Khởi hành lúc : 12/05/2025</p>
          <div class="text-wrapper-19">Giá chỉ từ :</div>
          <div class="element-VND-2">23.240.000 VND</div>
          <p class="eco-m-t-chi-u">Khứ hồi / Phổ thông</p>
          <div class="overlap-group-2">
            <div class="text-wrapper-21">Đặt ngay !</div>
          </div>
        </div>
        <div class="group-11">
          <img class="image-3" src="image/Brazil.png" />
          <p class="t-singapore-n-TP-h">Từ TP. Hà Nội<br />Đến Brazil</p>
          <p class="text-wrapper-18">Khởi hành lúc : 12/05/2025</p>
          <div class="text-wrapper-19">Giá chỉ từ :</div>
          <div class="element-VND-7">21.890.000 VND</div>
          <p class="eco-m-t-chi-u">Khứ hồi / Phổ thông</p>
          <div class="overlap-group-2">
            <div class="text-wrapper-21">Đặt ngay !</div>
          </div>
        </div>
        <div class="group-12">
          <img class="image-3" src="image/VuongQuocAnh.png" />
          <p class="t-singapore-n-TP-h">Từ TP. Hà Nội<br />Đến Vương Quốc Anh</p>
          <p class="text-wrapper-18">Khởi hành lúc : 12/05/2025</p>
          <div class="text-wrapper-19">Giá chỉ từ :</div>
          <div class="element-VND-5">15.240.000 VND</div>
          <div class="text-wrapper-20">Eco / Một chiều</div>
          <div class="overlap-group-2">
            <div class="text-wrapper-21">Đặt ngay !</div>
          </div>
        </div>
        <div class="group-13">
          <img class="image-3" src="image/HCM.png" />
          <p class="t-singapore-n-TP-h">Từ Singapore<br />Đến TP. Hồ Chí Minh</p>
          <p class="text-wrapper-18">Khởi hành lúc : 12/05/2025</p>
          <div class="text-wrapper-19">Giá chỉ từ :</div>
          <div class="element-VND-8">1.240.000 VND</div>
          <div class="text-wrapper-20">Eco / Một chiều</div>
          <div class="overlap-group-2">
            <div class="text-wrapper-21">Đặt ngay !</div>
          </div>
        </div>
        <div class="group-14">
          <img class="image-3" src="image/Duc.png" />
          <p class="t-singapore-n-TP-h">Từ TP. Hồ Chí Minh<br />Đến Đức</p>
          <p class="text-wrapper-18">Khởi hành lúc : 12/05/2025</p>
          <div class="text-wrapper-19">Giá chỉ từ :</div>
          <div class="element-VND-2">23.240.000 VND</div>
          <p class="eco-m-t-chi-u">Khứ hồi / Phổ thông</p>
          <div class="overlap-group-2">
            <div class="text-wrapper-21">Đặt ngay !</div>
          </div>
        </div>
        <div class="group-15">
          <img class="image-3" src="image/Brazil.png" />
          <p class="t-singapore-n-TP-h">Từ TP. Hồ Chí Minh<br />Đến Brazil</p>
          <p class="text-wrapper-18">Khởi hành lúc : 12/05/2025</p>
          <div class="text-wrapper-19">Giá chỉ từ :</div>
          <div class="element-VND-7">21.890.000 VND</div>
          <p class="eco-m-t-chi-u">Khứ hồi / Phổ thông</p>
          <div class="overlap-group-2">
            <div class="text-wrapper-21">Đặt ngay !</div>
          </div>
        </div>
        <div class="group-16">
          <img class="image-3" src="image/VuongQuocAnh.png" />
          <p class="t-singapore-n-TP-h">Từ TP. Hồ Chí Minh<br />Đến Vương Quốc Anh</p>
          <p class="text-wrapper-18">Khởi hành lúc : 12/05/2025</p>
          <div class="text-wrapper-19">Giá chỉ từ :</div>
          <div class="element-VND-5">15.240.000 VND</div>
          <div class="text-wrapper-20">Eco / Một chiều</div>
          <div class="overlap-group-2">
            <div class="text-wrapper-21">Đặt ngay !</div>
          </div>
        </div>
        <div class="more-wrapper">
          <div class="more-wrapper-2">
            <div class="text-wrapper-22">Xem thêm</div>
            <img class="plane" src="image/Plane red.png" />
          </div>
        </div>
        <div class="overlap-group-wrapper">
          <div class="overlap-3">
            <div class="text-wrapper-23">Xem thêm</div>
            <img class="plane" src="image/Plane red.png" />
          </div>
        </div>
        <p class="text-wrapper-24">Vé giá rẻ trong ngày</p>
        <p class="text-wrapper-25">Tại sao lại chọn Pegasus ?</p>
        <p class="text-wrapper-26">
          *Giá vé hiển thị được thu thập trong vòng 24 giờ qua. Giá vé chỉ áp dụng cho chuyến bay một chiều và đặt vé
          qua web. Giá vé không bao gồm hành lý ký gửi. Không áp dụng trên tất cả các chuyến bay hoặc các ngày. Số
          lượng vé có thể bị giới hạn. Có các điều kiện kèm theo.
        </p>
        <div class="rectangle-15"></div>
        <div class="rectangle-16"></div>
        <div class="rectangle-17"></div>
        <div class="frame-wrapper">
          <div class="frame">
            <div class="text-wrapper-27">Điểm khởi hành</div>
            <div class="text-wrapper-27">Điểm đến</div>
            <div class="text-wrapper-27">Ngày đi</div>
            <div class="text-wrapper-27">Loại vé</div>
            <div class="text-wrapper-27">Giá tiền</div>
          </div>
        </div>
        <div class="v-compacted">
          <div class="singapore-SIN">Singapore<br />(SIN)</div>
          <div class="TP-h-ch-minh-SGN">TP. Đà Nẵng<br />(SGN)</div>
          <div class="text-wrapper-28">12/10/2024</div>
          <div class="text-wrapper-29">Eco / Một chiều</div>
          <p class="t-VND-xem">
            <span class="text-wrapper-30">Từ<br /></span>
            <span class="text-wrapper-31">100.000 VND<br /></span>
            <span class="text-wrapper-32">Đã xem : 10 phút trước</span>
          </p>
        </div>
        <div class="v-compacted-2">
          <div class="singapore-SIN">Campuchia<br />(KHM)</div>
          <div class="TP-h-ch-minh-SGN">TP.Hồ Chí Minh<br />(SGN)</div>
          <div class="text-wrapper-28">12/10/2024</div>
          <div class="text-wrapper-29">Eco / Một chiều</div>
          <p class="t-VND-xem">
            <span class="text-wrapper-30">Từ<br /></span>
            <span class="text-wrapper-31">100.000 VND<br /></span>
            <span class="text-wrapper-32">Đã xem : 10 phút trước</span>
          </p>
        </div>
        <div class="v-compacted-3">
          <div class="singapore-SIN">Singapore<br />(SIN)</div>
          <div class="TP-h-ch-minh-SGN">Campuchia<br />(KHM)</div>
          <div class="text-wrapper-28">12/10/2024</div>
          <div class="text-wrapper-29">Eco / Một chiều</div>
          <p class="t-VND-xem">
            <span class="text-wrapper-30">Từ<br /></span>
            <span class="text-wrapper-31">100.000 VND<br /></span>
            <span class="text-wrapper-32">Đã xem : 10 phút trước</span>
          </p>
        </div>
        <div class="v-compacted-4">
          <div class="singapore-SIN">Singapore<br />(SIN)</div>
          <div class="TP-h-ch-minh-SGN">TP.Hồ Chí Minh<br />(SGN)</div>
          <div class="text-wrapper-28">12/10/2024</div>
          <div class="text-wrapper-29">Eco / Một chiều</div>
          <p class="t-VND-xem">
            <span class="text-wrapper-30">Từ<br /></span>
            <span class="text-wrapper-31">100.000 VND<br /></span>
            <span class="text-wrapper-32">Đã xem : 10 phút trước</span>
          </p>
        </div>
        <div class="v-compacted-5">
          <div class="singapore-SIN">Singapore<br />(SIN)</div>
          <div class="TP-h-ch-minh-SGN">TP.Hồ Chí Minh<br />(SGN)</div>
          <div class="text-wrapper-28">12/10/2024</div>
          <div class="text-wrapper-29">Eco / Một chiều</div>
          <p class="t-VND-xem">
            <span class="text-wrapper-30">Từ<br /></span>
            <span class="text-wrapper-31">100.000 VND<br /></span>
            <span class="text-wrapper-32">Đã xem : 10 phút trước</span>
          </p>
        </div>
        <div class="v-compacted-6">
          <div class="singapore-SIN">Singapore<br />(SIN)</div>
          <div class="TP-h-ch-minh-SGN">TP.Hồ Chí Minh<br />(SGN)</div>
          <div class="text-wrapper-28">12/10/2024</div>
          <div class="text-wrapper-29">Eco / Một chiều</div>
          <p class="t-VND-xem">
            <span class="text-wrapper-30">Từ<br /></span>
            <span class="text-wrapper-31">100.000 VND<br /></span>
            <span class="text-wrapper-32">Đã xem : 10 phút trước</span>
          </p>
        </div>
        <div class="v-compacted-7">
          <div class="singapore-SIN">Singapore<br />(SIN)</div>
          <div class="TP-h-ch-minh-SGN">TP. Đà Nẵng<br />(SGN)</div>
          <div class="text-wrapper-28">12/10/2024</div>
          <div class="text-wrapper-29">Eco / Một chiều</div>
          <p class="t-VND-xem">
            <span class="text-wrapper-30">Từ<br /></span>
            <span class="text-wrapper-31">100.000 VND<br /></span>
            <span class="text-wrapper-32">Đã xem : 10 phút trước</span>
          </p>
        </div>
        <div class="v-compacted-8">
          <div class="singapore-SIN">Campuchia<br />(KHM)</div>
          <div class="TP-h-ch-minh-SGN">TP.Hồ Chí Minh<br />(SGN)</div>
          <div class="text-wrapper-28">12/10/2024</div>
          <div class="text-wrapper-29">Eco / Một chiều</div>
          <p class="t-VND-xem">
            <span class="text-wrapper-30">Từ<br /></span>
            <span class="text-wrapper-31">100.000 VND<br /></span>
            <span class="text-wrapper-32">Đã xem : 10 phút trước</span>
          </p>
        </div>
        <div class="v-compacted-9">
          <div class="singapore-SIN">Singapore<br />(SIN)</div>
          <div class="TP-h-ch-minh-SGN">TP.Hồ Chí Minh<br />(SGN)</div>
          <div class="text-wrapper-28">12/10/2024</div>
          <div class="text-wrapper-29">Eco / Một chiều</div>
          <p class="t-VND-xem">
            <span class="text-wrapper-30">Từ<br /></span>
            <span class="text-wrapper-31">100.000 VND<br /></span>
            <span class="text-wrapper-32">Đã xem : 10 phút trước</span>
          </p>
        </div>
        <div class="v-compacted-10">
          <div class="singapore-SIN">Singapore<br />(SIN)</div>
          <div class="TP-h-ch-minh-SGN">TP.Hồ Chí Minh<br />(SGN)</div>
          <div class="text-wrapper-28">12/10/2024</div>
          <div class="text-wrapper-29">Eco / Một chiều</div>
          <p class="t-VND-xem">
            <span class="text-wrapper-30">Từ<br /></span>
            <span class="text-wrapper-31">100.000 VND<br /></span>
            <span class="text-wrapper-32">Đã xem : 10 phút trước</span>
          </p>
        </div>
        <div class="du-lch-khp-ni-cng">
          <div class="overlap-4">
            <div class="overlap-group-3">
              <p class="text-wrapper-33">Du lịch khắp nơi cùng với Pegasus !</p>
            </div>
            <div class="text-wrapper-34">Việt Nam</div>
            <div class="text-wrapper-35">Hoa Kỳ</div>
            <div class="text-wrapper-36">Quốc tế</div>
            <div class="text-wrapper-37">TP. Hồ Chí Minh</div>
            <div class="text-wrapper-38">Miami</div>
            <div class="text-wrapper-39">Hoa Kỳ</div>
            <div class="text-wrapper-40">Chu Lai</div>
            <div class="text-wrapper-41">San Francisco</div>
            <div class="text-wrapper-42">Brazil</div>
            <div class="text-wrapper-43">Hải Phòng</div>
            <div class="text-wrapper-44">Boynton</div>
            <div class="text-wrapper-45">Iceland</div>
            <div class="text-wrapper-46">Buôn Ma Thuật</div>
            <div class="text-wrapper-47">Chicago</div>
            <div class="text-wrapper-48">Ấn độ</div>
            <div class="text-wrapper-49">Đà Nẵng</div>
            <div class="text-wrapper-50">Dalles</div>
            <div class="text-wrapper-51">Pháp</div>
            <div class="text-wrapper-52">Hội An</div>
            <div class="text-wrapper-53">Columbus</div>
            <div class="text-wrapper-54">Hà Nội</div>
            <div class="text-wrapper-55">Washington.DC</div>
            <div class="text-wrapper-56">Vương quốc Anh</div>
            <div class="text-wrapper-57">Đà Lạt</div>
            <div class="text-wrapper-58">Seattle</div>
            <div class="text-wrapper-59">Úc</div>
            <div class="text-wrapper-60">Huế</div>
            <div class="text-wrapper-61">New York</div>
            <div class="text-wrapper-62">Poland</div>
            <div class="text-wrapper-63">Cần Thơ</div>
            <div class="text-wrapper-64">Atlanta</div>
            <div class="text-wrapper-65">Đức</div>
            <div class="text-wrapper-66">Đồng Hới</div>
            <div class="text-wrapper-67">Newark</div>
            <div class="text-wrapper-68">Hungary</div>
            <div class="text-wrapper-69">Xem thêm</div>
            <div class="text-wrapper-70">Xem thêm</div>
            <div class="text-wrapper-71">Xem thêm</div>
            <img class="add-new" src="image/Add New.png" />
            <img class="add-new-2" src="image/Add New.png" />
            <img class="add-new-3" src="image/Add New.png" />
            <img class="arrow-forward-ios" src="image/image 10.png" />
            <img class="arrow-forward-ios-2" src="image/image 10.png" />
            <img class="arrow-forward-ios-3" src="image/image 10.png" />
            <img class="arrow-forward-ios-4" src="image/image 10.png" />
            <img class="arrow-forward-ios-5" src="image/image 10.png" />
            <img class="arrow-forward-ios-6" src="image/image 10.png" />
            <img class="arrow-forward-ios-7" src="image/image 10.png" />
            <img class="arrow-forward-ios-8" src="image/image 10.png" />
            <img class="arrow-forward-ios-9" src="image/image 10.png" />
            <img class="arrow-forward-ios-10" src="image/image 10.png" />
            <img class="arrow-forward-ios-11" src="image/image 10.png" />
            <img class="arrow-forward-ios-12" src="image/image 10.png" />
            <img class="arrow-forward-ios-13" src="image/image 10.png" />
            <img class="arrow-forward-ios-14" src="image/image 10.png" />
            <img class="arrow-forward-ios-15" src="image/image 10.png" />
            <img class="arrow-forward-ios-16" src="image/image 10.png" />
            <img class="arrow-forward-ios-17" src="image/image 10.png" />
            <img class="arrow-forward-ios-18" src="image/image 10.png" />
            <img class="arrow-forward-ios-19" src="image/image 10.png" />
            <img class="arrow-forward-ios-20" src="image/image 10.png" />
            <img class="arrow-forward-ios-21" src="image/image 10.png" />
            <img class="arrow-forward-ios-22" src="image/image 10.png" />
            <img class="arrow-forward-ios-23" src="image/image 10.png" />
            <img class="arrow-forward-ios-24" src="image/image 10.png" />
            <img class="arrow-forward-ios-25" src="image/image 10.png" />
            <img class="arrow-forward-ios-26" src="image/image 10.png" />
            <img class="arrow-forward-ios-27" src="image/image 10.png" />
            <img class="arrow-forward-ios-28" src="image/image 10.png" />
            <img class="arrow-forward-ios-29" src="image/image 10.png" />
            <img class="arrow-forward-ios-30" src="image/image 10.png" />
            <img class="arrow-forward-ios-31" src="image/image 10.png" />
            <img class="arrow-forward-ios-32" src="image/image 10.png" />
          </div>
        </div>
        <div class="ti-sao-pegasussybaka">
          <div class="overlap-5">
            <img class="tenses" src="image/nhanhchong.png" />
            <div class="text-wrapper-72">Nhanh chóng</div>
            <p class="text-wrapper-73">Tìm chuyến bay hoặc điểm đến và so sánh giá chỉ với một cú click chuột.</p>
          </div>
          <div class="overlap-6">
            <img class="cost" src="image/tietkiem.png" />
            <div class="text-wrapper-74">Tiết kiệm</div>
            <p class="text-wrapper-73">Giá tốt với nhiều chương trình khuyến mãi và ưu đãi qua các kênh đặt vé trực tuyến.</p>
          </div>
          <div class="overlap-7">
            <div class="text-wrapper-75">Linh hoạt</div>
            <p class="text-wrapper-76">Thanh toán qua thẻ ATM nội địa, thẻ tín dụng, chuyển khoản,....</p>
            <img class="get-cash" src="image/linhhoat.png" />
          </div>
        </div>
      </div>
      <div class="group-wrapper">
        <div class="group-17">
          <img class="image-3" src="img/image-5.png" />
          <p class="t-singapore-n-TP-h">Từ Singapore<br />Đến TP. Hồ Chí Minh</p>
          <p class="text-wrapper-18">Khởi hành lúc : 12/05/2025</p>
          <div class="text-wrapper-19">Giá chỉ từ :</div>
          <div class="text-wrapper-77">240.000 VND</div>
          <div class="text-wrapper-20">Eco / Một chiều</div>
          <div class="overlap-group-2">
            <div class="text-wrapper-21">Đặt ngay !</div>
          </div>
        </div>
      </div>
      <div class="v-compacted-11">
        <div class="singapore-SIN">Singapore<br />(SIN)</div>
        <div class="TP-h-ch-minh-SGN">TP.Hồ Chí Minh<br />(SGN)</div>
        <div class="text-wrapper-28">12/10/2024</div>
        <div class="text-wrapper-29">Eco / Một chiều</div>
        <p class="t-VND-xem">
          <span class="text-wrapper-30">Từ<br /></span>
          <span class="text-wrapper-31">100.000 VND<br /></span>
          <span class="text-wrapper-32">Đã xem : 10 phút trước</span>
        </p>
      </div>
    </div>
  </div>
</body>

</html>