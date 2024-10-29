<?php
require_once('../Config/script.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $maCB = isset($_POST['MaCB']) ? $_POST['MaCB'] : ''; 

    if ($maCB) {
        $sql = "INSERT INTO `ve` (`MaChuyenBay`, `MaKH`, `TinhTrang`, `Voucher`) VALUES (?, '1', 'Đang đặt', NULL)";
        if ($stmt = mysqli_prepare($con, $sql)) {
            mysqli_stmt_bind_param($stmt, 's', $maCB); 

            if (mysqli_stmt_execute($stmt)) {
                header("Location: ../ChiTietVe.php");
                exit(); 
            } else {
                echo "Error executing statement: " . mysqli_error($con);
            }

            mysqli_stmt_close($stmt);
        } else {
            echo "Error preparing statement: " . mysqli_error($con);
        }
    } else {
        echo "MaCB is required.";
    }
}

// Close the database connection (optional)
mysqli_close($con);
?>
