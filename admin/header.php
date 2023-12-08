<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="adminn.css" />
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <style>
        
        .quanly{
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        h2{
            display: flex;
            align-items: center;
            padding: 10px 20px;
            gap: 15px;
        }
        .h2text h2{
            
            color:white;
            background-color: #3593D8;
            margin-top: 40px;
            padding: 10px 30px;
        
        }

        .btn{
            display: flex;
            margin-top: 8%;
            margin-left: 60px;
            gap: 10px;
            align-items: left;
        }

        .btn button{
            display: flex;
            border: 1px solid #3593D8;
            padding: 10px 10px;
            background-color: white;
            color: #3593D8;
            font-weight: bold;
            border-radius: 5px;
            gap:5px;
        }

        table {
            font-family: arial, sans-serif;
            border-collapse: collapse;
            width: 90%;
            align-items: center;
            border: 2px solid #dddddd;
            justify-content: center;
            margin-top: 30px;

        }

        td,
        th {
            border: 2px solid #dddddd;
            text-align: center;
            padding: 8px;
        }

        th{
            color:  white;
            background-color: #3593D8;
        }

        td button{
            background-color: #dddddd;
            padding: 5px 5px;
            color:#3593D8;
            border: 1px solid #dddddd;
            font-weight: bold;
            border-radius: 5px;
        }

    </style>
</head>

<body>
    <div class="admin_layout">
        <div class="admin_layout_left">
            <div class="admin_item">
                <img src="../hinh/TVU-SET.png" />
                <h2>QUẢN LÝ<br>CÔNG TÁC CHẤM THI</h2>
                <h3>KHOA KỸ THUẬT & CÔNG NGHỆ</h3>
            </div>
            <div class="admin_tab">
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
                    <ion-icon name="log-out"></ion-icon>
                    <span>Đăng xuất</span>
                </div>
            </div>
        </div>
        <div class="admin_layout_right">