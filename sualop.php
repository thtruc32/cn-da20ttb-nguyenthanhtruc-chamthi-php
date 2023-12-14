<?php
include("header.php");

include("ketnoi.php");

$usern=$_REQUEST["user"]; //Nhận giá trị user từ link sửa của quantri.php

$sql = "SELECT * FROM lop WHERE MaLop = '".$usern."'";
$kq = mysqli_query($conn, $sql) or die("Không thể sửa thông tin lớp học " . mysqli_error());
$row = mysqli_fetch_array($kq);
?>
<link rel="stylesheet" href="chinhsua.css" type="text/css"/>

<form enctype="multipart/form-data" action="thuchiensualop.php" name="thuchiensualop" method="post">
    <div class="text">
        <h2>
        <ion-icon name="add-circle"></ion-icon>
        SỬA LỚP HỌC
        </h2>
    </div>

    <div class="thembm">
        <div class="them">
            <span>Mã lớp học</span>
            <input type="text" readonly name="MaLop" value="<?php echo $row["MaLop"]; ?>"/>
        </div>

        <div class="them">
            <span>Tên lớp học</span>
            <input type="text" name="TenLop" value="<?php echo $row["TenLop"]; ?>"/>
        </div>

        <div class="luubm">
        <input type="submit" name="luu" value="Lưu"/>
        </div>
    </div>
</form>
    



<?php
include("footer.php")
?>