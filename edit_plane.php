<?php
// Database connection
$con = new mysqli('localhost', 'root', '', 'horseair');
if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}

// Fetch the current flight details from the database
$id = $_GET['updateid']; // This should be the MaChuyenBay of the flight to be updated
$sql = "SELECT * FROM chuyenbay WHERE MaChuyenBay='$id'";
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_assoc($result);

// Initialize variables with existing values from the database
$mb = $row['MaMB'];
$date = $row['KhoiHanh'];
$time = $row['ThoiGian'];
$sb1 = $row['MaSB1'];
$sb2 = $row['MaSB2'];

// Check if form is submitted
if (isset($_POST['submit'])) {
    // Get updated values from the form
    $mb = $_POST['MaMB'];
    $date = $_POST['KhoiHanh'];
    $time = $_POST['ThoiGian'];
    $sb1 = $_POST['MaSB1'];
    $sb2 = $_POST['MaSB2'];

    // Update the flight record in the database
    $sql = "UPDATE chuyenbay SET MaMB='$mb', KhoiHanh='$date', ThoiGian='$time', MaSB1='$sb1', MaSB2='$sb2' WHERE MaChuyenBay='$id'";
    $result = mysqli_query($con, $sql);

    if ($result) {
        echo "Sửa thông tin thành công";
        header('Location: adminPlane.php');
        exit(); // Make sure to stop further script execution after redirect
    } else {
        die(mysqli_error($con)); // Show MySQL error if the query fails
    }
}
?>



<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">

    <title>Sửa chuyến bay</title>
    <style> body{
      background-color: gainsboro;
    } </style>
  </head>
  <body color>
    <div class="container my-5">
    <form method="post">
  <div class="form-group">
    <label>Mã máy bay</label>
    <input type="text" class="form-control" name="MaMB" autocomplete="off" value=<?php echo $mb ?> readonly>
  </div>
  <div class="form-group">
    <label>Ngày khởi hành</label>
    <input type="date" class="form-control" name="KhoiHanh" autocomplete="off" value=<?php echo $date ?> required>
  </div>
  <div class="form-group">
    <label>Thời gian</label>
    <input type="time" class="form-control" name="ThoiGian" autocomplete="off" value=<?php echo $time ?> required>
  </div>
  <div class="form-group">
    <label>Sân bay khởi hành</label>
    <input type="text" class="form-control" name="MaSB1" autocomplete="off" value=<?php echo $sb1 ?> readonly>
  </div>
  <div class="form-group">
    <label>Sân bay cập bến</label>
    <input type="text" class="form-control" name="MaSB2" autocomplete="off" value=<?php echo $sb2 ?> readonly>
  </div>
  <button type="submit" class="btn btn-primary" name="submit">Lưu</button>
</form>
    </div>

  </body>
</html>