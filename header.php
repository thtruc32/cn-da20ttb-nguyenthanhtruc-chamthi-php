<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <link rel="stylesheet" href="gv.css">
</head>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,300;0,400;0,500;0,600;0,700;0,800;1,200;1,300&family=Quicksand:wght@300;400;500;600;700&display=swap');

* {
    font-family: Montserrat;
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

.slide_frame{
    display: flex;
    height: 300px;
    width: 100%;
    margin-left: 100%;
}

.img-container{
    display: flex;
    height: 300px;
    width: 100%;
    position: relative;
    float: left;
}

.slide_img{
    display: flex;
    width: 100%;
    height: 300px;
    margin: 0 0 0 -2400px;
    position: relative;
    -webkit-animation-name: slide_animation ;
    -webkit-animation-duration: 33s;
    -webkit-animation-iteration-count: infinite;
    -webkit-animation-direction: alternate;
    -webkit-animation-play-state: running;
}
@-webkit-keyframes slide_animation{
    0% {left: 0px;}
    10% {left: 0px;}
    20% {left: 1200px;}
    30% {left: 1200px;}
    40% {left: 2400px;}
    50% {left: 2400px;}
    60% {left: 1200px;}
    70% {left: 1200px;}
    80% {left: 0px;}
    90% {left: 0px;}
    100% {left: 0px;}
}
/* css hình ảnh 
.top_img{
    display: flex;
    align-items: center;
    justify-content: center;
    width: 100%;
    height: 300px;
    overflow: hidden;
}

.top_img img{
    display: block;
    width: 100%;
    height: 100%;
    object-fit: cover;
}
*/

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
                        <span>Nguyễn Thanh Trúc</span>
                    </div>
                    <div class="fi_tab_itemadimin">
                        <span>Admin</span>
                    </div>
                </div>
                <div class="fi_tab_logout">
                    <ion-icon name="log-in"></ion-icon>
                    <span>Đăng nhập</span>
                </div>
            </div>
        </div>
        <div class="admin_layout_right">
