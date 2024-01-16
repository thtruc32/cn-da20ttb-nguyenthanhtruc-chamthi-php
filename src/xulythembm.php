<?php
session_start();

include("ketnoi.php");

$MaBM = $_POST["MaBM"];
$TenBM = $_POST["TenBM"];

// Thêm bộ môn mới vào CSDL với khóa chính tự động tăng
$sql = "INSERT INTO bomon VALUES ('" .$MaBM. "', '" .$TenBM. "')";
$kq = mysqli_query($conn, $sql) or die("Không thể thêm bộ môn: " . mysqli_error($conn));

echo "<script language=javascript>
        alert('Thêm bộ môn thành công!');
        window.location='bomon.php';
    </script>";
?>