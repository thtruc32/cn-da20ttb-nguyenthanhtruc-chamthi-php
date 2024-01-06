<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="tcgv.css">
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
</head>
<body>

<?php
    include("ketnoi.php");
    session_start();
    $sql = "SELECT * from giangvien ";
    if(isset($_SESSION["giangvien"])){
        $userlogin = $_SESSION["giangvien"];
        $sql2 = "SELECT * from giangvien where Email='" . $userlogin . "'";
        $kq = mysqli_query($conn, $sql) or die("Không thể xuất thông tin người dùng " . mysqli_error());
        $kq2 = mysqli_query($conn, $sql2) or die("Không thể xuất thông tin người dùng " . mysqli_error());
        $giangviens = mysqli_fetch_array($kq); //lấy list các admin
        $giangvien_login =  mysqli_fetch_array($kq2); //lấy 1 trong list admin

    }else{
        
    }
    
    
   

    ?>
    <div class="frame">
        <div class="frame1">
            <a href="">
                <span>Trang chủ TVU</span>
            </a>
            <a href="">
                <span>Cổng thông tin sinh viên</span>
            </a>
            <a href="">
                <span>Phòng đào tạo</span>
            </a>
            <a href="">
                <span>Phòng khảo thí</span>
            </a>
            <!-- <label class="dn">
                <a href="dangnhap.php">
                    <span>Đăng nhập</span>
                </a>
            </label> -->
        </div>
        <div class="biaset">
            <img src="./hinh/biaset.png"/>
        </div>
        <div class="frame2">
            <div class="frame2a">
            <a href="lichchamthi.php">
                <span>LỊCH CHẤM THI</span>
            </a>
            <a href="dangkichamthi.php">
                <span>ĐĂNG KÝ CHẤM THI</span>
            </a>
            <a href="doimatkhau.php">
                <span>ĐỔI MẬT KHẨU</span>
            </a>
            </div>
            <div class="frame2b">
            <a href="thongtincanhan.php" class="namegv">
                <span><?php echo $giangvien_login["TenGV"]; ?></span>
                <a href="logout.php">
                <ion-icon name="log-out"></ion-icon></a>
            </a>
            </div>
        </div>