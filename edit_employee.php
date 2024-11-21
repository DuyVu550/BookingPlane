<?php
$con=new mysqli('localhost','root','','horseair');
if(!$con){
    die(mysqli_error($con));
}
$id=$_GET['updateid'];
$sql="SELECT * from nhanvien where MaNV='$id'";
$result=mysqli_query($con,$sql);
$row=mysqli_fetch_assoc($result);
$name=$row['TenNV'];
$location=$row['DiaChi'];
$sdt=$row['SDT'];
$date=$row['NgaySinh'];
$gender=$row['GioiTinh'];
$job=$row['CongViec'];
$money=$row['Luong'];

if(isset($_POST['submit'])){
    $name=$_POST['TenNV'];
    $location=$_POST['DiaChi'];
    $sdt=$_POST['SDT'];
    $date=$_POST['NgaySinh'];
    $gender=$_POST['GioiTinh'];
    $job=$_POST['CongViec'];
    $money=$_POST['Luong'];

    $sql="UPDATE nhanvien set MaNV='$id',TenNV='$name',DiaChi='$location',SDT='$sdt',NgaySinh='$date',GioiTInh='$gender',CongViec='$job',Luong='$money' where MaNV=$id";
    $result=mysqli_query($con,$sql);
    if($result){
        echo "Sửa thông tin thành công";
        header('location:adminEmploye.php');
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
        <style>
  select {
    padding: 8px;
    font-size: 16px;
    width: 1111px;
  }
</style>
  </head>
  <body color>
    <div class="container my-5">
    <form method="post">
  <div class="form-group">
    <label>Tên nhân viên</label>
    <input type="text" class="form-control" name="TenNV" autocomplete="off" value="<?php echo $name; ?>" required>
  </div>
  <div class="form-group">
    <label>Địa chỉ</label>
    <input type="text" class="form-control" name="DiaChi" autocomplete="off" value="<?php echo $location; ?>" required>
  </div>
  <div class="form-group">
    <label>SĐT</label>
    <input type="text" class="form-control" name="SDT" autocomplete="off" value="<?php echo $sdt; ?>" required>
  </div>
  <div class="form-group">
    <label>Ngày sinh</label>
    <input type="date" class="form-control" name="NgaySinh" autocomplete="off" value="<?php echo $date; ?>" required>
  </div>
  <div class="form-group">
    <label>Giới tính</label>
    <select name="GioiTinh" id="GioiTinh">
      <option value="Nam">Nam</option>
      <option value="Nữ">Nữ</option>
    </select>  </div>
  <div class="form-group">
    <label>Công việc</label>
    <input type="text" class="form-control" name="CongViec" autocomplete="off" value="<?php echo $job; ?>"  required>
  </div>
  <div class="form-group">
    <label>Lương</label>
    <input type="text" class="form-control" name="Luong" autocomplete="off" value="<?php echo $money; ?>" required>
  </div>
  <button type="submit" class="btn btn-primary" name="submit">Lưu</button>
</form>
    </div>

  </body>
</html>