<?php
session_start();
include("ketnoi.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["MaGV"]) && isset($_POST["MaCT"])) {
        $MaCT = $_POST["MaCT"];
        $MaGV = $_POST["MaGV"];
        $Trangthai = "Chờ duyệt"; // Trạng thái mặc định khi đăng ký

        // Thêm dữ liệu vào bảng phancong
        $sqlInsert = "INSERT INTO phancong (MaCT, MaGV, Trangthai) VALUES ('$MaCT', '$MaGV', '$Trangthai')";

    
    if (mysqli_query($conn, $sqlInsert)) {
        header("Location: dangkichamthi.php"); 
        exit();
    } else {
        // Xử lý lỗi nếu có
        echo "Lỗi: " . mysqli_error($conn);
    }
}
}
?>