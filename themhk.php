<?php
include("headerad.php");
?>

<link rel="stylesheet" href="chinhsua.css" type="text/css"/>

<form enctype="multipart/form-data" action="xulythemhk.php" name="xlythemhk" method="post">

    <div class="text">
        <h2>
        <ion-icon name="add-circle"></ion-icon>
        THÊM HỌC KỲ
        </h2>
    </div>

    <div class="thembm">
        <div class="them">
            <span>Mã học kỳ</span>
            <input type="text" name="MaHK"/>
        </div>

        <div class="them">
            <span>Tên học kỳ</span>
            <input type="text" name="TenHK"/>
        </div>

        <div class="luubm">
        <input type="submit" name="them" value="Thêm"/>
        </div>
    </div>

</form>

<style>
            .admin_tab >:nth-child(8){
                background-color: #3593D8;
                color: white;
            }
            </style>

<?php
include("footer.php")
?>