<?php
session_start();

include("ketnoi.php");

$MaCT = $_POST["MaC"];
$MaLop = $_POST["MaLop"];
$MaMH = $_POST["MaMH"];
$MaNK = $_POST["MaNK"];
$MaHT = $_POST["MaHT"];
$MaHK = $_POST["MaHK"];
$Ngaynhan = $_POST["Ngaynhan"];
$Ngaytra = $_POST["Ngaytra"];
$SLbai = $_POST["SLbai"];
$Dongia = $_POST["Dongia"];

// Update academic department in the database
$sql = "UPDATE chamthi SET MaCT = '$MaCT', Malop = '$Malop', MaMH = '$MaMH', MaNK = '$MaNK', MaHT = '$MaHT', MaHK = '$MaHK', Ngaynhan = '$Ngaynhan', Ngaytra = '$Ngaytra', SLbai = '$SLbai', Dongia = '$Dongia' WHERE MaCT = '$MaCT'";
$kq = mysqli_query($conn, $sql) or die("Không thể cập nhật thông tin giảng viên: " . mysqli_error($conn));

echo "<script language=javascript>
        alert('Cập nhật thông tin chấm thi thành công!');
        window.location='chamthi.php';
    </script>";
?>
