<?php
include("headerad.php");

include("ketnoi.php");

$usern=$_REQUEST["user"]; //Nhận giá trị user từ link sửa của quantri.php

$sql = "SELECT * FROM bomon WHERE MaBM = '".$usern."'";
$kq = mysqli_query($conn, $sql) or die("Không thể sửa thông tin bộ môn " . mysqli_error());
$row = mysqli_fetch_array($kq);
?>
<link rel="stylesheet" href="chinhsua.css" type="text/css"/>

<form enctype="multipart/form-data" action="thuchiensuabm.php" name="thuchiensuabm" method="post">
    <div class="text">
        <h2>
        <ion-icon name="add-circle"></ion-icon>
        SỬA BỘ MÔN
        </h2>
    </div>

    <div class="thembm">
        <div class="them">
            <span>Mã bộ môn</span>
            <input type="text" readonly name="MaBM" value="<?php echo $row["MaBM"]; ?>"/>
    
 </div>
        <div class="them">
            <span>Tên bộ môn</span>
            <input type="text" name="TenBM" value="<?php echo $row["TenBM"]; ?>"/>
        </div>

        <div class="luubm">
        <input type="submit" name="luu" value="Lưu"/>
        </div>
    </div>
</form>
<style>
            .admin_tab > :nth-child(1){
                background-color: #3593D8;
                color: white;
            }
            </style>
<?php
include("footer.php")
?>