<?php
include("headerad.php");
include("ketnoi.php");

$usern=$_REQUEST["user"]; //Nhận giá trị user từ link sửa của quantri.php

$sql = "SELECT * FROM nienkhoa WHERE MaNK = '".$usern."'";
$kq = mysqli_query($conn, $sql) or die("Không thể sửa thông tin niên khóa" . mysqli_error());
$row = mysqli_fetch_array($kq);
?>
<link rel="stylesheet" href="chinhsua.css" type="text/css"/>

<form enctype="multipart/form-data" action="thuchiensuank.php" name="thuchiensuank" method="post">
    <div class="text">
        <h2>
        <ion-icon name="add-circle"></ion-icon>
        SỬA NIÊN KHÓA
        </h2>
    </div>

    <div class="thembm">
        <div class="them">
            <span>Mã niên khóa</span>
            <input type="text" name="MaNK" value="<?php echo $row["MaNK"]; ?>"/>
        </div>

        <div class="them">
            <span>Tên niên khóa</span>
            <input type="text" name="TenNK" value="<?php echo $row["TenNK"]; ?>"/>
        </div>

        <div class="them">
            <span>Thời gian bắt đầu</span>
            <input type="date" name="TGbatdau"/>
        </div>

        
        <div class="them">
            <span>Thời gian kết thúc</span>
            <input type="date" name="TGketthuc"/>
        </div>


        <div class="luubm">
        <input type="submit" name="luu" value="Lưu"/>
        </div>
    </div>
</form>
    



<?php
include("footer.php")
?>