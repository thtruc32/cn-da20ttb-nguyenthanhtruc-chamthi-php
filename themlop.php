<?php
include("headerad.php");
?>
<link rel="stylesheet" href="chinhsua.css" type="text/css"/>

    <form enctype="multipart/form-data " action="xulythemlop.php" name="xlythemlop" method="post">
    <div class="text">
        <h2>
        <ion-icon name="add-circle"></ion-icon>
        THÊM LỚP HỌC
        </h2>
    </div>

    <div class="thembm">
        <div class="them">
            <span>Mã lớp học</span>
            <input type="text" name="MaLop"/>
        </div>

        <div class="them">
            <span>Tên lớp</span>
            <input type="text" name="TenLop"/>
        </div>

        <div class="luubm">
        <input type="submit" name="them" value="Thêm"/>
        </div>
    </div>
    </form>
    



<?php
include("footer.php")
?>