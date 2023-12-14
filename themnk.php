<?php
include("header.php")
?>

<link rel="stylesheet" href="chinhsua.css" type="text/css"/>

<form enctype="multipart/form-data" action="xulythemnk.php" name="xlythemnk" method="post">

<div class="text">
        <h2>
        <ion-icon name="add-circle"></ion-icon>
        THÊM NIÊN KHÓA
        </h2>
    </div>

    <div class="thembm">
        <div class="them">
            <span>Mã niên khóa</span>
            <input type="text" name="MaNK"/>
        </div>

        <div class="them">
            <span>Tên niên khóa</span>
            <input type="text" name="TenNK"/>
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

