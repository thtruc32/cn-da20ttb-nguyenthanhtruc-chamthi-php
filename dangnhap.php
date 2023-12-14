<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="dangnhap.css">
</head>

<body>
    <div class="title">
        <img src="./hinh/TVU-SET.png" />
        <h1>QUẢN LÝ CÔNG TÁC CHẤM THI </h1>
        <h3>KHOA KỸ THUẬT & CÔNG NGHỆ</h3>
    </div>
    <div class="container">
        <form action="xulydangnhap.php" name="dangnhap" method="post">
            <h2>Đăng nhập</h2>
            <div class="dangnhap">
                <span>Tài khoản</span>
                <input type="text" name="tendn"/>
            </div>
            <div class="dangnhap">
                <span>Mật khẩu</span>
                <input type="password" name="matkhau"/>
            </div>
            <div class="check">
                <input type="checkbox" />
                <span>Nhớ lần đăng nhập này</span>
            </div>
            <button name="dn" type="submit">Đăng nhập</button>
        </form>
    </div>
    </div>
</body>

</html>