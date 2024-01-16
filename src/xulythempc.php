<?php
session_start();

include("ketnoi.php");

$MaGV = $_POST["MaGV"];
$MaCT = $_POST["MaCT"];
$Trangthai = $_POST["Trangthai"];

// Thêm bộ môn mới vào CSDL với khóa chính tự động tăng
$sql = "INSERT INTO phancong VALUES ('" .$MaGV. "', '" .$MaCT. "', '" .$Trangthai. "')";
$kq = mysqli_query($conn, $sql) or die("Không thể thêm phân công: " . mysqli_error($conn));

echo "<script language=javascript>
        alert('Thêm phân công thành công!');
        window.location='phancongcham.php';
    </script>";
?>