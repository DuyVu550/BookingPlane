<?php
$con=new mysqli('localhost','root','','horseair');
if(!$con){
    die(mysqli_error($con));
}
if (isset($_GET['deleteid'])){
    $id=$_GET['deleteid'];
    
    $sql="DELETE from chuyenbay where MaChuyenBay='$id'";
    $result=mysqli_query($con,$sql);
    if($result){
        echo "Xóa thành công";
        header('location:adminPlane.php');
    }else{
        die(mysqli_error($con));
    }
}
?>