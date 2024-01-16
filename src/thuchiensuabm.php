<?php
session_start();

include("ketnoi.php");

$MaBM = $_POST["MaBM"];
$TenBM = $_POST["TenBM"];


// Update academic department in the database
$sql = "UPDATE bomon SET TenBM = '$TenBM' WHERE MaBM = '$MaBM'";
$kq = mysqli_query($conn, $sql) or die("Không thể cập nhật bộ môn: " . mysqli_error($conn));

echo "<script language=javascript>
        alert('Cập nhật bộ môn thành công!');
        window.location='bomon.php';
    </script>";
?>