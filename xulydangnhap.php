<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Xử lý đăng nhập</title>
</head>

<body>
    <?php

    include("ketnoi.php");
    $user = $_POST["tendn"];
    $pass = $_POST["matkhau"];
    $sql = "select * from giangvien where Email='" .$user. "' and Matkhau='" .$pass. "'";

    
    $kq = mysqli_query($conn, $sql) or die("Không thể mở bảng admin".mysqli_error()); // thực thi câu lệnh SQL
    if (mysqli_fetch_array($kq)) {
        $_SESSION["giangvien"] = $user;
        echo ("<script language=javascript>
                // alert('Đăng nhập thành công');
                window.location='trangchugv.php';
                </script> ");
    } else {
        $sql2 = "select * from admin where emailad='" .$user. "' and matkhauad ='" .$pass. "'";
        $kq2 = mysqli_query($conn, $sql2) or die("Không thể mở bảng admin".mysqli_error()); // thực thi câu lệnh SQL
        if (mysqli_fetch_array($kq2)) {
            $_SESSION["admin"] = $user;
            echo ("<script language=javascript>
                    // alert('Đăng nhập thành công');
                    window.location='bomon.php';
                    </script>");
        } else {
            echo ("<script language=javascript>
                    alert('Sai tên đăng nhập hoặc mật khẩu');
                    window.location='dangnhap.php';
                    </script> ");
        }
    }
    ?>
</body>

</html>
