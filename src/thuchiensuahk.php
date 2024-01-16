<?php
session_start();

include("ketnoi.php");

$MaHK = $_POST["MaHK"];
$TenHK = $_POST["TenHK"];


// Update academic department in the database
$sql = "UPDATE hocky SET TenHK = '$TenHK' WHERE MaHK = '$MaHK'";
$kq = mysqli_query($conn, $sql) or die("Không thể cập nhật học kỳ: " . mysqli_error($conn));

echo "<script language=javascript>
        alert('Cập nhật học kỳ thành công!');
        window.location='hocky.php';
    </script>";
?>