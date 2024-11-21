<?php
$con=new mysqli('localhost','root','','horseair');
if(!$con){
    die(mysqli_error($con));
}
if (isset($_GET['deleteid'])){
    $id=$_GET['deleteid'];
    
    $sql="DELETE from khachhang where MaKH='$id'";
    $result=mysqli_query($con,$sql);
    if($result){
        echo "Xóa thành công";
        header('location:adminCustomer.php');
    }else{
        die(mysqli_error($con));
    }
}
?>