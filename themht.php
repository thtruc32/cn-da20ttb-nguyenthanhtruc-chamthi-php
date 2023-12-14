<?php
include("header.php")
?>

<link rel="stylesheet" href="chinhsua.css" type="text/css"/>

<form enctype="multipart/form-data" action="xulythemht.php" name="xlythemht" method="post">

    <div class="text">
        <h2>
        <ion-icon name="add-circle"></ion-icon>
            THÊM HÌNH THỨC
        </h2>
    </div>

    <div class="thembm">
        <div class="them">
            <span>Mã hình thức</span>
            <input type="text" name="MaHT"/>
        </div>

        <div class="them">
            <span>Tên hình thức</span>
            <input type="text" name="TenHT"/>
        </div>

        <div class="luubm">
        <input type="submit" name="them" value="Thêm"/>
        </div>
    </div>

</form>


<?php
include("footer.php")
?>