<?php
include("headerad.php");

include("ketnoi.php");

$usern=$_REQUEST["user"]; //Nhận giá trị user từ link sửa của quantri.php

$sql = "SELECT * FROM monhoc WHERE MaMH = '".$usern."'";
$kq = mysqli_query($conn, $sql) or die("Không thể sửa thông tin môn học " . mysqli_error());
$row = mysqli_fetch_array($kq);
?>
<link rel="stylesheet" href="chinhsua.css" type="text/css"/>

<form enctype="multipart/form-data" action="thuchiensuamhoc.php" name="thuchiensuamhoc" method="post">
    <div class="text">
        <h2>
        <ion-icon name="add-circle"></ion-icon>
        SỬA MÔN HỌC
        </h2>
    </div>

    <div class="thembm">
        <div class="them">
            <span>Mã môn học</span>
            <input type="text" name="MaMH" value="<?php echo $row["MaMH"]; ?>"/>
        </div>

        <div class="them">
            <span>Tên môn học</span>
            <input type="text" name="TenMH" value="<?php echo $row["TenMH"]; ?>"/>
        </div>

        <div class="luubm">
        <input type="submit" name="luu" value="Lưu"/>
        </div>
    </div>
</form>
    



<?php
include("footer.php")
?>