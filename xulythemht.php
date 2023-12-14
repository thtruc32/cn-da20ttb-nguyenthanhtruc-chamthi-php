<?php
session_start();

include("ketnoi.php");

$MaHT = $_POST["MaHT"];
$TenHT = $_POST["TenHT"];

// Thêm bộ môn mới vào CSDL với khóa chính tự động tăng
$sql = "INSERT INTO hinhthuc VALUES ('" .$MaHT. "', '" .$TenHT. "')";
$kq = mysqli_query($conn, $sql) or die("Không thể thêm hình thức thi: " . mysqli_error($conn));

echo "<script language=javascript>
        alert('Thêm hình thức thi thành công!');
        window.location='hinhthuc.php';
    </script>";
?>