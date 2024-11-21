<?php
$con=new mysqli('localhost','root','','horseair');
if(!$con){
    die(mysqli_error($con));
}
$id=$_GET['updateid'];
$sql="SELECT * from khachhang where MaKH='$id'";
$result=mysqli_query($con,$sql);
$row=mysqli_fetch_assoc($result);
$name=$row['TenKH'];
$cccd=$row['CCCD'];
$date=$row['NgaySinh'];
$email=$row['Email'];
$card=$row['SerialCard'];
$sdt=$row['SDT'];
if(isset($_POST['submit'])){
    $name=$_POST['TenKH'];
    $cccd=$_POST['CCCD'];
    $date=$_POST['NgaySinh'];
    $email=$_POST['Email'];
    $card=$_POST['SerialCard'];
    $sdt=$_POST['SDT'];

    $sql="UPDATE khachhang set MaKH='$id',TenKH='$name',CCCD='$cccd',NgaySinh='$date',Email='$email',SerialCard='$card',SDT='$sdt' where MaKH=$id";
    $result=mysqli_query($con,$sql);
    if($result){
        echo "Sửa thông tin thành công";
        header('location:adminCustomer.php');
    }else{
        die(mysqli_error($con));
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

    <title>Thêm khách hàng</title>
    <style> body{
      background-color: gainsboro;
    } </style>
  </head>
  <body color>
    <div class="container my-5">
    <form method="post">
  <div class="form-group">
    <label>Tên khách hàng</label>
    <input type="text" class="form-control" name="TenKH" autocomplete="off" value="<?php echo $name; ?>" required>
  </div>
  <div class="form-group">
    <label>CCCD</label>
    <input type="text" class="form-control" name="CCCD" autocomplete="off" value=<?php echo $cccd ?> required>
  </div>
  <div class="form-group">
    <label>Ngày sinh</label>
    <input type="date" class="form-control" name="NgaySinh" autocomplete="off" value=<?php echo $date ?> required>
  </div>
  <div class="form-group">
    <label>Email</label>
    <input type="email" class="form-control" name="Email" autocomplete="off" value=<?php echo $email ?> required>
  </div>
  <div class="form-group">
    <label>Số thẻ tín dụng</label>
    <input type="text" class="form-control" name="SerialCard" autocomplete="off" value=<?php echo $card ?> required>
  </div>
  <div class="form-group">
    <label>Số điện thoại</label>
    <input type="text" class="form-control" name="SDT" autocomplete="off" value=<?php echo $sdt ?> required>
  </div>
  <button type="submit" class="btn btn-primary" name="submit">Lưu</button>
</form>
    </div>

  </body>
</html>