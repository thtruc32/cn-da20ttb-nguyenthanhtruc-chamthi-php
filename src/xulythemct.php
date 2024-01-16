<?php
session_start();

include("ketnoi.php");

$MaCT = $_POST["MaCT"];
$lop = $_POST["lop"];
$monhoc= $_POST["monhoc"];
$hinhthuc = $_POST["hinhthuc"];
$hocky = $_POST["hocky"];
$nienkhoa = $_POST["nienkhoa"];
$Ngaynhan = $_POST["Ngaynhan"];
$Ngaytra = $_POST["Ngaytra"];
$SLBai = $_POST["SLBai"];



// Thêm bộ môn mới vào CSDL với khóa chính tự động tăng

$sql = "INSERT INTO chamthi (MaCT, MaLop, MaMH, MaHT, MaHK, MaNK, Ngaynhan, Ngaytra, SLBai) VALUES ('$MaCT','$lop', '$monhoc', '$hinhthuc', '$hocky', '$nienkhoa', '$Ngaynhan', '$Ngaytra', '$SLBai')";

$kq = mysqli_query($conn, $sql) or die("Không thể thêm chấm thi: " . mysqli_error($conn));

echo "<script language=javascript>
        alert('Thêm chấm thi thành công!');
        window.location='chamthi.php';
    </script>";
?>