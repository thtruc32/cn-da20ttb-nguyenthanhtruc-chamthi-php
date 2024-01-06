<?php
session_start();

include("ketnoi.php");

$MaHT = $_POST["MaHT"];
$TenHT = $_POST["TenHT"];
$Hthuc = $_POST["Hthuc"];
$Buoi = $_POST["Buoi"];
$Gia = $_POST["Gia"];

// Thêm bộ môn mới vào CSDL với khóa chính tự động tăng
$sql = "INSERT INTO hinhthuc (MaHT, TenHT, Hthuc, Buoi, Gia) VALUES ('$MaHT','$TenHT', '$Hthuc', '$Buoi', '$Gia' )";
$kq = mysqli_query($conn, $sql) or die("Không thể thêm hình thức thi: " . mysqli_error($conn));

echo "<script language=javascript>
        alert('Thêm hình thức thi thành công!');
        window.location='hinhthuc.php';
    </script>";
?>