<?php
include("header.php");

include("ketnoi.php");

$usern=$_REQUEST["user"]; //Nhận giá trị user từ link sửa của quantri.php

$sql = "SELECT * FROM hocky WHERE MaHK = '".$usern."'";
$kq = mysqli_query($conn, $sql) or die("Không thể sửa học kỳ" . mysqli_error());
$row = mysqli_fetch_array($kq);
?>
<link rel="stylesheet" href="chinhsua.css" type="text/css"/>

<form enctype="multipart/form-data" action="thuchiensuahk.php" name="thuchiensuahk" method="post">
    <div class="text">
        <h2>
        <ion-icon name="add-circle"></ion-icon>
        SỬA HỌC KỲ
        </h2>
    </div>

    <div class="thembm">
        <div class="them">
            <span>Mã học kỳ</span>
            <input type="text" name="MaHK" value="<?php echo $row["MaHK"]; ?>"/>
        </div>

        <div class="them">
            <span>Tên học kỳ</span>
            <input type="text" name="TenHK" value="<?php echo $row["TenHK"]; ?>"/>
        </div>

        <div class="luubm">
        <input type="submit" name="luu" value="Lưu"/>
        </div>
    </div>
</form>
    



<?php
include("footer.php")
?>