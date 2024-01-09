<?php
include("headerad.php");

include("ketnoi.php");

$usern=$_REQUEST["user"]; //Nhận giá trị user từ link sửa của quantri.php

$sql = "SELECT * FROM hinhthuc WHERE MaHT = '".$usern."'";
$kq = mysqli_query($conn, $sql) or die("Không thể sửa hình thức thi" . mysqli_error());
$row = mysqli_fetch_array($kq);
?>
<!-- <link rel="stylesheet" href="chinhsua.css" type="text/css"/> -->
<style>
    .khung {
    background: #F5F5F5;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    border: 2px solid #F5F5F5;
    width: 80%;
    margin: 7rem auto;
    gap: 20px;
    padding: 50px;
    border-radius: 5px;
}

.them1 {

flex: 1;
display: flex;
color:#3593D8;
font-weight: 700;
align-items: center;
gap: 50px;
}

.them1a{
    display: flex;
    flex-direction: column;
    padding: 5px 10px;
    align-items: flex-start;
    gap: 5px;

}

.them2{

flex: 1;
display: flex;
color:#3593D8;
font-weight: 700;
align-items: center;
gap: 50px;
}

.them2a{
    display: flex;
    flex-direction: column;
    padding: 5px 10px;
    align-items: flex-start;
    gap: 5px;

}

input[type="text" i] {
height: 30px;
border: 1px solid #3593D8;
border-radius: 3px;
width: 200px;
}

.luubtn{
display: flex;
flex-direction: column;
align-items: center;
padding: 10px 20px;
}

.luubtn input{
padding: 5px 10px;
color: white;
background-color: #3593D8;
border: 1px solid white;
font-weight: bold;
border-radius: 3px;
}

.them1a select{
    width: 200px;
    height: 30px;
    border: 1px solid #3593D8;
    border-radius: 3px;
    
}
</style>
<form enctype="multipart/form-data" action="thuchiensuaht.php" name="thuchiensuaht" method="post">
    <div class="text">
        <h2>
        <ion-icon name="add-circle"></ion-icon>
        SỬA HÌNH THỨC THI
        </h2>
    </div>

    <div class="khung">
        <div class="them1">
            <div class="them1a">
                <span>Mã hình thức</span>
                <input type="text" name="MaHT" readonly value="<?php echo $row["MaHT"]; ?>"/>
            </div>
            <div class="them1a">
                <span>Tên hình thức</span>
                <input type="text" name="TenHT" value="<?php echo $row["TenHT"]; ?>"/>
            </div>
        </div>
        <div class="them2">
            <div class="them2a">
                <span>Hình thức</span>
                <select name="Hthuc" style="height: 30px; border: 1px solid #3593D8; border-radius: 3px;">
                    <option value="Tự luận" <?php echo ($row["Hthuc"] == "Tự luận") ? "selected" : ""; ?>>Tự luận</option>
                    <option value="Trắc nghiệm" <?php echo ($row["Hthuc"] == "Trắc nghiệm") ? "selected" : ""; ?>>Trắc nghiệm</option>
                    <option value="Kết thúc học phần sau đại học" <?php echo ($row["Hthuc"] == "Kết thúc học phần sau đại học") ? "selected" : ""; ?>>Kết thúc học phần sau đại học</option>
                    <option value="Chấm phản biện" <?php echo ($row["Hthuc"] == "Chấm phản biện") ? "selected" : ""; ?>>Chấm phản biện</option>
                    <option value="Chấm vấn đáp, thực hành" <?php echo ($row["Hthuc"] == "Chấm vấn đáp, thực hành") ? "selected" : ""; ?>>Chấm vấn đáp, thực hành</option>
                </select>
            </div>
            <div class="them2a">
                <span>Buổi</span>
                <input type="text" name="Buoi" value="<?php echo $row["Buoi"]; ?>"/>
            </div>
            <div class="them2a">
                <span>Đơn giá</span>
                <input type="text" name="Gia" value="<?php echo $row["Gia"]; ?>"/>
            </div>
        </div>

        <div class="luubtn">
            <input type="submit" name="luu" value="Lưu"/>
        </div>
    </div>
</form>
    

<style>
            .admin_tab >:nth-child(5){
                background-color: #3593D8;
                color: white;
            }
            </style>

<?php
include("footer.php")
?>