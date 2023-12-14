<?php
session_start();

include("ketnoi.php");

$MaGV = $_POST["MaGV"];
$bomon = $_POST["bomon"];
$TenGV= $_POST["TenGV"];
$SdtGV= $_POST["SdtGV"];
$Email= $_POST["Email"];
$Matkhau= $_POST["Matkhau"];

// Update academic department in the database
$sql = "UPDATE giangvien SET MaGV ='$MaGV', mabomon = '$mabomon', TenGV = '$MaGV', SdtGV = '$SdtGV', Email = '$Email', Matkhau = '$Matkhau') WHERE MaGV = '$MaGV'";
$kq = mysqli_query($conn, $sql) or die("Không thể cập nhật thông tin giảng viên: " . mysqli_error($conn));

echo "<script language=javascript>
        alert('Cập nhật niên khóa thành công!');
        window.location='giangvien.php';
    </script>";
?>