<?php
session_start();

include("ketnoi.php");

$MaMH = $_POST["MaMH"];
$TenMH = $_POST["TenMH"];


// Update academic department in the database
$sql = "UPDATE monhoc SET TenMH = '$TenMH' WHERE MaMH = '$MaMH'";
$kq = mysqli_query($conn, $sql) or die("Không thể cập nhật môn học: " . mysqli_error($conn));

echo "<script language=javascript>
        alert('Cập nhật môn học thành công!');
        window.location='monhoc.php';
    </script>";
?>