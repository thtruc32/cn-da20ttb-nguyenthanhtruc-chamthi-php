<?php
session_start();

include("ketnoi.php");

$MaHK = $_POST["MaHK"];
$TenHK = $_POST["TenHK"];

// Thêm bộ môn mới vào CSDL với khóa chính tự động tăng
$sql = "INSERT INTO hocky VALUES ('" .$MaHK. "', '" .$TenHK. "')";
$kq = mysqli_query($conn, $sql) or die("Không thể thêm học kỳ: " . mysqli_error($conn));

echo "<script language=javascript>
        alert('Thêm học kỳ thành công!');
        window.location='hocky.php';
    </script>";
?>