<?php
session_start();

include("ketnoi.php");

$MaCT = $_POST["MaCT"];
$MaLop = $_POST["MaLop"];
$MaMH = $_POST["MaMH"];
$MaNK = $_POST["MaNK"];
$MaHT = $_POST["MaHT"];
$MaHK = $_POST["MaHK"];
$Ngaynhan = $_POST["Ngaynhan"];
$Ngaytra = $_POST["Ngaytra"];
$SLbai = $_POST["SLbai"];

// Update academic department in the database
$sql = "UPDATE chamthi 
        SET MaLop = '$MaLop', MaMH = '$MaMH', MaNK = '$MaNK', MaHT = '$MaHT', MaHK = '$MaHK', Ngaynhan = '$Ngaynhan', Ngaytra = '$Ngaytra', SLbai = '$SLbai' 
        WHERE MaCT = '$MaCT'";
$kq = mysqli_query($conn, $sql) or die("Không thể cập nhật thông tin chấm thi: " . mysqli_error($conn));

echo "<script language=javascript>
        alert('Cập nhật thông tin chấm thi thành công!');
        window.location='chamthi.php';
    </script>";

?>
