<?php
session_start();

include("ketnoi.php");

$MaGV = $_POST["MaGV"];
$MaBM = $_POST["MaBM"];
$TenGV = $_POST["TenGV"];
$SdtGV = $_POST["SdtGV"];
$Email = $_POST["Email"];
$Matkhau = $_POST["Matkhau"];

// Update academic department in the database
$sql = "UPDATE giangvien SET MaBM = '$MaBM', TenGV = '$TenGV', SdtGV = '$SdtGV', Email = '$Email', Matkhau = '$Matkhau' WHERE MaGV = '$MaGV'";
$kq = mysqli_query($conn, $sql) or die("Không thể cập nhật thông tin giảng viên: " . mysqli_error($conn));

echo "<script language=javascript>
        alert('Cập nhật thông tin giảng viên thành công!');
        window.location='giangvien.php';
    </script>";
?>
