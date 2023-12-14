<?php
session_start();

include("ketnoi.php");

$MaLop = $_POST["MaLop"];
$TenLop = $_POST["TenLop"];


// Update academic department in the database
$sql = "UPDATE lop SET TenLop = '$TenLop' WHERE MaLop = '$MaLop'";
$kq = mysqli_query($conn, $sql) or die("Không thể cập nhật lớp học: " . mysqli_error($conn));

echo "<script language=javascript>
        alert('Cập nhật lớp học thành công!');
        window.location='lophoc.php';
    </script>";
?>