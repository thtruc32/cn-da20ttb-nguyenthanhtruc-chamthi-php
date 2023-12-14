<?php
session_start();

include("ketnoi.php");

$MaHT = $_POST["MaHT"];
$TenHT = $_POST["TenHT"];


// Update academic department in the database
$sql = "UPDATE hinhthuc SET TenHT = '$TenHT' WHERE MaHT = '$MaHT'";
$kq = mysqli_query($conn, $sql) or die("Không thể cập nhật hình thức thi: " . mysqli_error($conn));

echo "<script language=javascript>
        alert('Cập nhật hình thức thành công!');
        window.location='hinhthuc.php';
    </script>";
?>