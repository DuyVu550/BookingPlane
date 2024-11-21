<?php
$con=new mysqli('localhost','root','','horseair');
if(!$con){
    die(mysqli_error($con));
}
$id=$_GET['updateid'];
$sql="SELECT * from account where AccID='$id'";
$result=mysqli_query($con,$sql);
$row=mysqli_fetch_assoc($result);
$name=$row['Username'];
$pass=$row['Password'];
$role=$row['Role'];
if(isset($_POST['submit'])){
    $name=$_POST['Username'];

    $sql="UPDATE account set AccID='$id',Username='$name' where AccID=$id";
    $result=mysqli_query($con,$sql);
    if($result){
        echo "Sửa thông tin thành công";
        header('location:adminAcc.php');
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

    <title>Sửa tài khoản</title>
    <style> body{
      background-color: gainsboro;
    } </style>
  </head>
  <body color>
    <div class="container my-5">
    <form method="post">
  <div class="form-group">
    <label>Tên tài khoản</label>
    <input type="text" class="form-control" name="Username" autocomplete="off" value="<?php echo $name; ?>" required>
  </div>
  <div class="form-group">
    <label>Mật khẩu</label>
    <input type="text" class="form-control" name="CCCD" autocomplete="off" value=<?php echo str_repeat('*', strlen($pass)); ?> readonly>
  </div>
  <div class="form-group">
    <label>Loại tài khoản</label>
    <input type="text" class="form-control" name="NgaySinh" autocomplete="off" value="<?php echo $role; ?>" readonly>
  </div>
  <button type="submit" class="btn btn-primary" name="submit">Lưu</button>
</form>
    </div>

  </body>
</html>