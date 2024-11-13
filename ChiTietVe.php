<?php
require_once('Config/script.php');

$query = "SELECT * FROM booking WHERE MaKH = 1 and TinhTrang = 'Đang đặt' ";
$result = mysqli_query($con, $query);
?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="CSS/ChiTiet.css" />
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
          <div class="div">
            <label class="Ve-text">Vé đã chọn</label>
          </div>
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
          <div class="table1">
            <?php
            if (mysqli_num_rows($result) > 0) {
              while ($row = mysqli_fetch_assoc($result)) {
            ?>
                <div class="card">
                  <div class="rectangle-12">
                    <div class="flex-container">
                      <div class="row-container">
                        <label class="location"><?php echo $row['TenKH']; ?></label>
                        <label class="date"><?php echo $row['KhoiHanh']; ?></label>
                        <div>
                          <img class="access-time" src="image/access_time.png" />
                          <label class="label"><?php echo $row['ThoiGian']; ?></label>
                        </div>
                      </div>
                      <div class="row-container">
                        <label class="location">Mã Máy Bay:<?php echo $row['MaMB']; ?></label>
                        <label class="date"><?php echo $row['KhoiHanh']; ?></label>
                        <div>
                          <img class="access-time" src="image/access_time.png" />
                          <label class="label"><?php echo $row['ThoiGian']; ?></label>
                        </div>
                      </div>
                    </div>
                    <div class="text-wrapper-26">Hạng thường</div>
                    <div class="text-wrapper-21">3.265.000VND</div>
                    <button type="submit" class="rectangle-20"></button>
                    <div class="text-wrapper-55">Xem Vé</div>
                  </div>
                </div>
            <?php
              }
            } else {
              echo '<p class="Result">Không tìm thấy chuyến bay.</p>';
              echo '<p class="text-wrapper-22">Có thể có thêm ngày cho lựa chọn chuyến bay của Quý khách!</p>';
              echo '<div class="text-wrapper-23">Chọn ngày khác</div>';
            }
            ?>
            <div class="sum-container">
              <p class="Sum">Tổng số tiền là: 3.256.000VNĐ</p>
              <div class="button-container">
                <button class="btn" id="payBtn">Thanh toán</button>
                <button class="btn">Hủy</button>
                <div class="momo-payment" id="momo-payment">
                  <h3>Thanh toán qua MoMo</h3>
                  <p>Chọn hình thức thanh toán MoMo để hoàn tất giao dịch.</p>
                  <button class="btn" id="momoPayBtn">Thanh toán MoMo</button>
                </div>
              </div>
            </div>

            <!-- Place the JavaScript code at the bottom of the page -->
            <script>
              document.getElementById('payBtn').addEventListener('click', async function() {
    try {
        console.log("Initiating MoMo payment...");
        // Make a POST request to your backend to create the MoMo payment order
        const response = await fetch('/createPayment.php', {
            method: 'POST',
            headers: { 'Content-Type': 'application/json' },
            body: JSON.stringify({ amount: 3256000 }) // Send the amount or other necessary data
        });

        // Check if the response was successful (status 200)
        if (!response.ok) {
            throw new Error(`HTTP error! Status: ${response.status}`);
        }

        // Parse the JSON response from the server
        const data = await response.json();
        console.log("Response from server:", data);

        // Check if the MoMo payment URL is provided by the server
        if (data.payUrl) {
            // Redirect to MoMo's payment page
            window.location.href = data.payUrl;
        } else {
            // Handle error if no payment URL is returned
            alert('Error initiating MoMo payment: ' + (data.message || "No message provided"));
        }
    } catch (error) {
        console.error('Error initiating MoMo payment:', error);
        alert('An error occurred while initiating the payment. Please check the console for more details.');
    }
});
            </script>
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>
  </div>
</body>

</html>