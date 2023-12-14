<?php

if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

if (!isset($_SESSION["giangvien"])) {
    echo "<script language=javascript>
    alert('Bạn không có quyền trên trang này!');
    window.location='dangnhap.php';
    </script>";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <link rel="stylesheet" href="gv.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <style>
            .mySlides {
                display:none;
            }

            .w3-display-container{
                height: 400px;
                overflow: hidden;
                display: flex;
                align-items: center;
                width: 100%;
                margin-top: 10px;
            }
</style>
</head>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,300;0,400;0,500;0,600;0,700;0,800;1,200;1,300&family=Quicksand:wght@300;400;500;600;700&display=swap');

* {
    font-family: Montserrat;
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}


    </style>
<body>
<div class="admin_layout">
        <div class="admin_layout_left">
            <div class="admin_item">
                <img src="./hinh/TVU-SET.png" />
                <h2>QUẢN LÝ<br>CÔNG TÁC CHẤM THI</h2>
                <h3>KHOA KỸ THUẬT & CÔNG NGHỆ</h3>
            </div>
            <div class="admin_tab">

                <a href="trangchu.php" class="tab_item">
                    <ion-icon name="home"></ion-icon>
                    <span>Trang chủ</span>
                </a>

                <a href="bomon.php" class="tab_item">
                    <ion-icon name="bookmark"></ion-icon>
                    <span>Quản lý bộ môn</span>
                </a>

                <a href="giangvien.php" class="tab_item">
                    <ion-icon name="people"></ion-icon>
                    <span>Quản lý giảng viên</span>
                </a>

                <a href="lophoc.php" class="tab_item">
                    <ion-icon name="business"></ion-icon>
                    <span>Quản lý lớp học</span>
                </a>

                <a href="monhoc.php" class="tab_item">
                    <ion-icon name="book"></ion-icon>
                    <span>Quản lý môn học</span>
                </a>

                <a href="hinhthuc.php" class="tab_item">
                    <ion-icon name="folder"></ion-icon>
                    <span>Quản lý hình thức</span>
                </a>

                <a href="chamthi.php" class="tab_item">
                    <ion-icon name="pencil"></ion-icon>
                    <span>Quản lý chấm thi</span>
                </a>

                <a href="hocky.php" class="tab_item">
                    <ion-icon name="pause-circle"></ion-icon>
                    <span>Quản lý học kỳ</span>
                </a>

                <a href="nienkhoa.php" class="tab_item">
                    <ion-icon name="extension-puzzle"></ion-icon>
                    <span>Quản lý niên khóa</span>
                </a>
            </div>

            <div class="fi_tab">
                <div class="fi_tab_item_info">
                    <div class="fi_tab_itemtext">
                    <span><?php echo $giangvien_login["TenGV"]; ?></span>
                    </div>
                    <div class="fi_tab_itemadimin">
                        <span>Admin</span>
                    </div>
                </div>
                <a href="logingv.php" class="fi_tab_logout">
                    <ion-icon name="log-in"></ion-icon>
                    <span>Đăng nhập</span>
                </a>
            </div>
        </div>
        <div class="admin_layout_right">
