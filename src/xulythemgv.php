<?php
session_start();

include("ketnoi.php");

$MaGV = $_POST["MaGV"];
$bomon = $_POST["bomon"];
$TenGV= $_POST["TenGV"];
$SdtGV = $_POST["SdtGV"];
$Email = $_POST["Email"];
$Matkhau = $_POST["Matkhau"];

// Thêm bộ môn mới vào CSDL với khóa chính tự động tăng
$sql = "INSERT INTO giangvien (MaGV, MaBM, TenGV, SdtGV, Email, Matkhau) VALUES ('$MaGV', '$bomon', '$TenGV', '$SdtGV', '$Email', '$Matkhau')";
$kq = mysqli_query($conn, $sql) or die("Không thể thêm giảng viên: " . mysqli_error($conn));

echo "<script language=javascript>
        alert('Thêm giảng viên thành công!');
        window.location='giangvien.php';
    </script>";
?>