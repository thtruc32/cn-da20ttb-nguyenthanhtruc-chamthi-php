<?php
session_start();

include("ketnoi.php");

$MaNk = $_POST["MaNK"];
$TenNK = $_POST["TenNK"];
$TGbatdau= $_POST["TGbatdau"];
$TGbatdau= $_POST["TGketthuc"];

// Update academic department in the database
$sql = "UPDATE nienkhoa SET TenNK = '$TenNK WHERE MaNK = '$MaNK'";
$kq = mysqli_query($conn, $sql) or die("Không thể cập nhật niên khóa: " . mysqli_error($conn));

echo "<script language=javascript>
        alert('Cập nhật niên khóa thành công!');
        window.location='nienkhoa.php';
    </script>";
?>