<?php
include("header.php");

include("ketnoi.php");

$usern=$_REQUEST["user"]; //Nhận giá trị user từ link sửa của quantri.php

$sql = "SELECT * FROM hinhthuc WHERE MaHT = '".$usern."'";
$kq = mysqli_query($conn, $sql) or die("Không thể sửa hình thức thi" . mysqli_error());
$row = mysqli_fetch_array($kq);
?>
<link rel="stylesheet" href="chinhsua.css" type="text/css"/>

<form enctype="multipart/form-data" action="thuchiensuaht.php" name="thuchiensuaht" method="post">
    <div class="text">
        <h2>
        <ion-icon name="add-circle"></ion-icon>
        SỬA HÌNH THỨC THI
        </h2>
    </div>

    <div class="thembm">
        <div class="them">
            <span>Mã hình thức</span>
            <input type="text" name="MaHT" value="<?php echo $row["MaHT"]; ?>"/>
        </div>

        <div class="them">
            <span>Tên hình thức</span>
            <input type="text" name="TenHT" value="<?php echo $row["TenHT"]; ?>"/>
        </div>

        <div class="luubm">
        <input type="submit" name="luu" value="Lưu"/>
        </div>
    </div>
</form>
    



<?php
include("footer.php")
?>