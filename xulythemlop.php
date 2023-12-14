<?php
session_start();

include("ketnoi.php");

$MaLop = $_POST["MaLop"];
$TenLop = $_POST["TenLop"];

// Thêm bộ môn mới vào CSDL với khóa chính tự động tăng
$sql = "INSERT INTO lop VALUES ('" .$MaLop. "', '" .$TenLop. "')";
$kq = mysqli_query($conn, $sql) or die("Không thể thêm lớp học: " . mysqli_error($conn));

echo "<script language=javascript>
        alert('Thêm lớp học thành công!');
        window.location='lophoc.php';
    </script>";
?>