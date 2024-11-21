<?php
$con=new mysqli('localhost','root','','horseair');
if(!$con){
    die(mysqli_error($con));
}
if(isset($_POST['submit'])){
    $name=$_POST['TenNV'];
    $location=$_POST['DiaChi'];
    $sdt=$_POST['SDT'];
    $date=$_POST['NgaySinh'];
    $gender=$_POST['GioiTinh'];
    $job=$_POST['CongViec'];
    $money=$_POST['Luong'];

    $sql="INSERT INTO nhanvien (TenNV,DiaChi,SDT,NgaySinh,GioiTinh,CongViec,Luong) values ('$name','$location','$sdt','$date','$gender','$job','$money') ";
    $result=mysqli_query($con,$sql);
    if($result){
        echo "Thêm nhân viên thành công";
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

    <title>Thêm nhân viên</title>
    <style> body{
      background-color: gainsboro;
    } </style>
    <style>
  select {
    padding: 8px;
    font-size: 16px;
    width: 1111px;
  }
</style>
  </head>
  <body>
    <div class="container my-5">
    <form method="post">
  <div class="form-group">
    <label>Tên nhân viên</label>
    <input type="text" class="form-control" name="TenNV" autocomplete="off" required>
  </div>
  <div class="form-group">
    <label>Địa chỉ</label>
    <input type="text" class="form-control" name="DiaChi" autocomplete="off" required>
  </div>
  <div class="form-group">
    <label>SĐT</label>
    <input type="text" class="form-control" name="SDT" autocomplete="off" required>
  </div>
  <div class="form-group">
    <label>Ngày sinh</label>
    <input type="date" class="form-control" name="NgaySinh" autocomplete="off" required>
  </div>
  <div class="form-group">
    <label>Giới tính</label>
    <select name="GioiTinh" id="GioiTinh">
      <option value="male">Nam</option>
      <option value="female">Nữ</option>
    </select>  </div>
  <div class="form-group">
    <label>Công việc</label>
    <input type="text" class="form-control" name="CongViec" autocomplete="off" required>
  </div>
  <div class="form-group">
    <label>Lương</label>
    <input type="text" class="form-control" name="Luong" autocomplete="off" required>
  </div>
  <button type="submit" class="btn btn-primary" name="submit">Submit</button>
</form>
    </div>

  </body>
</html>