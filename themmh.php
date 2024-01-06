<?php
include("headerad.php");
?>

<link rel="stylesheet" href="chinhsua.css" type="text/css"/>
<form enctype="multipart/form-data" action="xulythemmon.php" name="xlythemmon" method="post">

    <div class="text">
        <h2>
        <ion-icon name="add-circle"></ion-icon>
        THÊM MÔN HỌC
        </h2>
    </div>

    <div class="thembm">
        <div class="them">
            <span>Mã môn học</span>
            <input type="text" name="MaMH"/>
        </div>

        <div class="them">
            <span>Tên môn học</span>
            <input type="text" name="TenMH"/>
        </div>

        <div class="luubm">
        <input type="submit" name="them" value="Thêm"/>
        </div>
    </div>

</form>



<?php
include("footer.php")
?>