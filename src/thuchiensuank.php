<?php
session_start();

include("ketnoi.php");

$MaNK = $_POST["MaNK"];
$TenNK = $_POST["TenNK"];
$TGbatdau= $_POST["TGbatdau"];
$TGketthuc= $_POST["TGketthuc"];

// Update academic department in the database
$sql = "UPDATE nienkhoa SET TenNK = '$TenNK', TGbatdau = '$TGbatdau', TGketthuc = '$TGketthuc' WHERE MaNK = '$MaNK'";
$kq = mysqli_query($conn, $sql) or die("Không thể cập nhật niên khóa: " . mysqli_error($conn));

echo "<script language=javascript>
        alert('Cập nhật niên khóa thành công!');
        window.location='nienkhoa.php';
    </script>";
?>