<?php
include("header.php")
?>
<link rel="stylesheet" href="chinhsua.css" type="text/css"/>

<form enctype="multipart/form-data" action="xulythembm.php" name="xlythembm" method="post">
    <div class="text">
        <h2>
        <ion-icon name="add-circle"></ion-icon>
        THÊM BỘ MÔN
        </h2>
    </div>

    <div class="thembm">
        <div class="them">
            <span>Mã bộ môn</span>
            <input type="text" readonly name="MaBM"/>
        </div>

        <div class="them">
            <span>Tên bộ môn</span>
            <input type="text" name="TenBM"/>
        </div>

        <div class="luubm">
        <input type="submit" name="them" value="Thêm"/>
        </div>
    </div>
</form>
    



<?php
include("footer.php")
?>