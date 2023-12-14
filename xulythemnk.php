<?php
session_start();

include("ketnoi.php");

$MaNK = $_POST["MaNK"];
$TenNK = $_POST["TenNK"];
$TGbatdau= $_POST["TGbatdau"];
$TGbatdau= $_POST["TGketthuc"];

// Thêm bộ môn mới vào CSDL với khóa chính tự động tăng
$sql = "INSERT INTO nienkhoa VALUES ('" .$MaNK. "', '" .$TenNK. "')";
$kq = mysqli_query($conn, $sql) or die("Không thể thêm niên khóa: " . mysqli_error($conn));

echo "<script language=javascript>
        alert('Thêm niên khóa thành công!');
        window.location='nienkhoa.php';
    </script>";
?>