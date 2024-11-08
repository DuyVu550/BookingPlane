<?php
$con=new mysqli('localhost','root','','horseair');
if(!$con){
    die(mysqli_error($con));
}
if(isset($_POST['submit'])){
    $name=$_POST['TenKH'];
    $cccd=$_POST['CCCD'];
    $date=$_POST['NgaySinh'];
    $email=$_POST['Email'];
    $card=$_POST['SerialCard'];
    $sdt=$_POST['SDT'];

    $sql="INSERT INTO khachhang (TenKH,CCCD,NgaySinh,Email,SerialCard,SDT) values ('$name','$cccd','$date','$email','$card','$sdt') ";
    $result=mysqli_query($con,$sql);
    if($result){
        echo "Thêm khách hàng thành công";
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
  </head>
  <body>
    <div class="container my-5">
    <form method="post">
  <div class="form-group">
    <label>Tên khách hàng</label>
    <input type="text" class="form-control" name="TenKH" autocomplete="off" required>
  </div>
  <div class="form-group">
    <label>CCCD</label>
    <input type="text" class="form-control" name="CCCD" autocomplete="off" required>
  </div>
  <div class="form-group">
    <label>Ngày sinh</label>
    <input type="date" class="form-control" name="NgaySinh" autocomplete="off" required>
  </div>
  <div class="form-group">
    <label>Email</label>
    <input type="email" class="form-control" name="Email" autocomplete="off" required>
  </div>
  <div class="form-group">
    <label>Số thẻ tín dụng</label>
    <input type="text" class="form-control" name="SerialCard" autocomplete="off" required>
  </div>
  <div class="form-group">
    <label>Số điện thoại</label>
    <input type="text" class="form-control" name="SDT" autocomplete="off" required>
  </div>
  <button type="submit" class="btn btn-primary" name="submit">Submit</button>
</form>
    </div>

  </body>
</html>